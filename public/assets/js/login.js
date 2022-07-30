document.addEventListener("DOMContentLoaded", function() {
    document.getElementById("form-login").addEventListener("submit", function (e) {
        e.preventDefault();

        let url = document.getElementById("login-url").value;
        let formData = new FormData(this);
        var button = document.getElementById("btn-login");
        var tmpLabel = button.textContent
        button.setAttribute("disabled", true)
        button.innerText = "Please wait...."

        axios.post(url, formData)
            .then(function (res) {
                var response = res.data
               if (response.success == false) {
                   mdtoast(response.message, {
                       position: "bottom center"
                   })
               } else {
                   mdtoast.success(response.message, {
                       position: "bottom center"
                   })
                  setTimeout(function () {
                      location.href = response.redirect
                  }, 1200)
               }
            })
            .catch(function (res) {
               var err = res.response.data;
                if(err.errors) {
                    handelValidation(err.errors)
                }
            })
            .finally(function () {
                button.removeAttribute("disabled")
                button.innerText = tmpLabel
            })
    });
});


function handelValidation(messages) {
    // reset before looping
    var errorMessage = document.querySelectorAll('.message-error');
    if(errorMessage) {
        errorMessage.forEach(function (e) {
            e.remove();
        });
    }


    for(let i in messages)
    {
        for(let t in messages[i])
        {
            document.querySelectorAll("input[name=" + i + "]").forEach(function (el) {

                el.classList.add('input-error');


                var newElement = document.createElement("p")
                    newElement.classList.add("message-error")
                    newElement.innerHTML = messages[i][t]

                el.after(newElement);

                // remove on keypress validation
                el.addEventListener("keypress", function () {
                    el.classList.remove("input-error");
                    newElement.remove()
                });
                // remove on change validation
                el.addEventListener("change", function () {
                    el.classList.remove("input-error");
                    newElement.remove()
                });

            });
        }
    }
}
