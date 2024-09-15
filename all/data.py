# importing libraries

import requests
import random
from bs4 import BeautifulSoup
import json
import threading
from flask import Flask, render_template, request, url_for, redirect
from jinja2 import Template

# internal files
import all.database as database


app = Flask(__name__)


def specific_string(length):
    # define the specific string
    sample_string = 'pqrstuvwxyaksdjhkasdlkjqluwoelkansldknc'
    # define the condition for random string
    result = ''.join((random.choice(sample_string)) for x in range(length))
    return result


cookies = {
    'session-id': '261-1163646-2292460',
    'session-id-time': '2082787201l',
    'i18n-prefs': 'INR',
    'ubid-acbin': '262-5280853-8370053',
    'session-token': '0Yx/sl7jsWUnMhSpZuNhnhoitPCy/P87wflbutp1yQrh8Yb7bcu/iy3Pq6+mwfvbHPt5levtC+EpVnMKlrXlieqJfd4SHBcO9/fKvQVmGwljmQpqwB64900L33gAXKg3/CY2GA19uLkuW5syRtu0GcyU6SvUfupuV4+E0Rd4U5kuWuzVWlNYH/uGVOJA2vhioSLTEh56fG2jrmtzmwZXX9qsZVVQjGaaqT729Q99uP8=',
    'csm-hit': 'tb:s-RCA08544A2YQCT2J63XM|1684211284757&t:1684211285532&adb:adblk_no',

}

headers = {
    'User-Agent': specific_string(random.randint(1, 999)),
    'From': specific_string(random.randint(1, 999)),
    'Referer': "https://www.amazon.in/dp/B0CGD8HGCJ/ ",

}



def main(p_id):

    my_product_id = p_id

    # product_id = "B0BQQSTC82"

    URL = "https://www.amazon.in/dp/" + my_product_id + "/ "

    # Making the HTTP Request
    webpage = requests.get(URL, headers=headers,
                           cookies=cookies)

    # Creating the Soup Object containing all data
    soup = BeautifulSoup(webpage.content, "lxml")

    # retrieving product title
    all_title = []
    try:
        # Outer Tag Object
        title = soup.find("span",
                          attrs={"id": 'productTitle'})

        # Inner NavigableString Object
        title_value = title.string

        # Title as a string value
        title_string = title_value.strip().replace(',', '')

    except AttributeError:
        title_string = "NA"

    print("product Title = ", title_string)

    # saving the title in the file
    all_title.append(title_string)
    # File.write(f"{title_string},")

    # retrieving price
    all_price = []
    try:
        price = soup.find(
            "span", attrs={'class': 'a-price-whole'}).string.strip().replace(',', '')
        # we are omitting unnecessary spaces
        # and commas form our string
    except AttributeError:
        price = "NA"
    print("Products price = ", price)

    # saving
    # File.write(f"{price},")
    all_price.append(price)

    # retrieving product discount------------------------------------------
    all_discount = []
    try:
        discount = soup.find("div", attrs={
            'class': 'a-section '}).string.strip().replace(',', '')

    except AttributeError:

        try:
            discount = soup.find(
                "span", attrs={'class': 'a-size-large a-color-price savingPriceOverride aok-align-center reinventPriceSavingsPercentageMargin savingsPercentage'}).string.strip().replace(',', '')
        except:
            discount = "NA"
        all_discount.append(discount)
        # File.write(f"{discount},")

    print("discount = ", discount)

  # retrieving product size--------------------------------------------------

    # all_size = []
    # size = soup.select_one(
    #     'select[name="dropdown_selected_size_name"]').select('option')
    # size.pop(0)
    # for op in size:

    #     all_size.append(op.get_text())
    #     print(op.get_text())
    # # File.write(f"{op.get_text()},")

  # retrieving product color--------------------------------------------------

    all_colors = []
    for li in soup.find_all("img", attrs={'class': 'imgSwatch'}):
        all_colors.append(li['alt'])

    print("color = ", all_colors)
    # File.write(f"{li['alt']},")

    # retrieving product rating------------------------------------------------
    all_rating = []
    try:
        rating = soup.find("i", attrs={
            'class': 'a-icon a-icon-star a-star-4-5'}).string.strip().replace(',', '')

    except AttributeError:

        try:
            rating = soup.find(
                "span", attrs={'class': 'a-icon-alt'}).string.strip().replace(',', '')
        except:

            rating = "NA"
    all_rating.append(rating)
    print("Overall rating = ", rating)

    # File.write(f"{rating},")

    # retrieving product MRP-----------------------------------------------
    # all_mrp = []
    # try:
    #     mrp = soup.find(
    #         "span", attrs={'class': 'a-size-small aok-offscreen'}).string.strip().replace(',', '')

    # except AttributeError:
    #     mrp = "NA"
    # all_mrp.append(mrp)
    # print("Total mrp = ", mrp)
    # # File.write(f"{review_count},")

    # print availablility status-----------------------------------------------
    all_avel = []
    try:
        available = soup.find("div", attrs={'id': 'availability'})
        available = available.find("span").string.strip().replace(',', '')

    except AttributeError:
        available = "NA"
    print("Availability = ", available)

    # saving the availability and closing the line
    all_avel.append(available)
    # File.write(f"{available},\n")

    # closing the file
    # File.close()

    listdata = [all_colors, all_title,
                all_discount, all_rating, all_avel, all_price]

    return listdata



@app.route('/search/<query>', methods=["GET", "POST"])
def search(query):

    search_query = database.query(query)

    search_img = []
    search_link = []
    for y in search_query:

        search_product_img = y[10]
        search_product_page_link = y[2]

        search_img.append(search_product_img)
        search_link.append(search_product_page_link)

    search_data = [search_img, search_link]
    print(search_data)

    return render_template('search.html', search_query = search_data)



def product_page_data():
    message = database.data()

    img = []
    link = []
    for x in message:

        product_img = x[12]
        product_page_link = x[4]

        img.append(product_img)
        link.append(product_page_link)

    p_page_data = [img, link]

    print(product_img)

    return p_page_data


@app.route('/output/<p_id>', methods=["GET", "POST"])
def alldata(p_id):

    main_fun_data = main(p_id)
    product_page_data_in = product_page_data()

    return render_template('product_page.html', send_main_fun_data=main_fun_data, product_page_data_send=product_page_data_in)


# tr1 = threading.Thread(target=main)
# tr2 = threading.Thread(target=alldata)
# tr1.start()
# tr2.start()
# tr1.join()
# tr2.join()

app.run()
