
export class Alerts {
    constructor(show_id, message) {
        this.show_id = show_id
        this.message = message

    }

    success() {
        var alertDiv = document.createElement('div');
        alertDiv.classList.add('alert', 'alert-success', 'alert-auto-close');
        alertDiv.setAttribute('role', 'alert');
        alertDiv.innerHTML = '' + this.message + '';
        document.getElementById('' + this.show_id + '').appendChild(alertDiv)

        setTimeout(function () {
            alertDiv.remove();
        }, 2000); // 2000 milliseconds = 2 seconds


    }

    warning() {
        var alertDiv = document.createElement('div');
        alertDiv.classList.add('alert', 'alert-warning', 'alert-auto-close');
        alertDiv.setAttribute('role', 'alert');
        alertDiv.innerHTML = '' + this.message + '';
        document.getElementById('' + this.show_id + '').appendChild(alertDiv)

        setTimeout(function () {
            alertDiv.remove();
        }, 2000); // 2000 milliseconds =  2 seconds


    }

    error() {
        var alertDiv = document.createElement('div');
        alertDiv.classList.add('alert', 'alert-danger', 'alert-auto-close');
        alertDiv.setAttribute('role', 'alert');
        alertDiv.innerHTML = '' + this.message + '';
        document.getElementById('' + this.show_id + '').appendChild(alertDiv)

        setTimeout(function () {
            alertDiv.remove();
        }, 2000); // 2000 milliseconds = 2 seconds


    }


}

