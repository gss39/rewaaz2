import schedule
import time
import subprocess




def run_file2():
    subprocess.run(["python", "gss.py"])

    print("ok")

schedule.every(60).seconds.do(run_file2)

while True:
    schedule.run_pending()
    time.sleep(1)




