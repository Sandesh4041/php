document.addEventListener("DOMContentLoaded", function() {
    const dropList = document.querySelectorAll(".droplist select");
    const getButton = document.querySelector("#getExchangeRateBtn");
    const fromCurr = document.querySelector("#from-currency");
    const toCurr = document.querySelector("#to-currency");
    const fromFlag = document.querySelector("#from-flag");
    const toFlag = document.querySelector("#to-flag");
    const apiKey = '28055f29ad031add1560c057';

    // Assuming you have already declared country_list in countrys.js

    for (let i = 0; i < dropList.length; i++) {
        for (let currency_code in country_list) {
            let selected = '';
            if (i === 0 && currency_code === "USD") {
                selected = "selected";
            } else if (i === 1 && currency_code === "NPR") {
                selected = "selected";
            }

            // option tag creation with passing currency code as text and value
            let optionTag = `<option value="${currency_code}" ${selected}>${currency_code}</option>`;

            // inserting option tag inside select tag
            dropList[i].insertAdjacentHTML("beforeend", optionTag);
        }
    }

    function updateFlag(selectElement, flagElement) {
        const countryCode = selectElement.value;
        flagElement.src = `https://flagsapi.com/${country_list[countryCode]}/flat/64.png`;
    }

    fromCurr.addEventListener("change", () => updateFlag(fromCurr, fromFlag));
    toCurr.addEventListener("change", () => updateFlag(toCurr, toFlag));

    getButton.addEventListener("click", e => {
        e.preventDefault(); // Prevent default form submission

        const amountInput = document.querySelector("#amountInput");
        let amountVal = amountInput.value;

        if (amountVal === "" || amountVal === "0") {
            amountVal = 1;
            amountInput.value = "1";
        } else {
            amountVal = parseFloat(amountVal);
        }

        const fromCurrency = fromCurr.value;
        const toCurrency = toCurr.value;

        const url = `https://v6.exchangerate-api.com/v6/${apiKey}/latest/${fromCurrency}`;

        fetch(url)
            .then(response => response.json())
            .then(data => {
                if (data.result === "success") {
                    const exchangeRate = data.conversion_rates[toCurrency];
                    const exchangeAmount = (amountVal * exchangeRate).toFixed(2);

                    document.querySelector('.exchangerate').textContent = `${amountVal} ${fromCurrency} = ${exchangeAmount} ${toCurrency}`;
                } else {
                    throw new Error(data["error-type"]);
                }
            })
            .catch(error => {
                console.error("Error fetching exchange rate:", error);
                document.querySelector('.exchangerate').textContent = "Something went wrong: " + error.message;
            });
    });
});
