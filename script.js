let img = document.getElementById("img");



document.querySelector("select").addEventListener("change", function() {
    switch(this.value) {
        case "usd":
            img.src = "https://www.worldometers.info/img/flags/us-flag.gif";
            break;
        case "jpy":
            img.src = "https://www.worldometers.info/img/flags/ja-flag.gif";
            break;
        case "chf":
            img.src = "https://www.worldometers.info/img/flags/sz-flag.gif";
            break;
        case "gbp":
            img.src = "https://www.worldometers.info/img/flags/uk-flag.gif";
            break;
    }
})