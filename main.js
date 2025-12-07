// Explains purpose of: const cleaveCC = new Cleave("#cardNumber", {
const cleaveCC = new Cleave("#cardNumber", {
// Explains purpose of: creditCard: true,
    creditCard: true,
// Explains purpose of: delimiter: "-",
    delimiter: "-",
// Explains purpose of: onCreditCardTypeChanged: function (type) {
    onCreditCardTypeChanged: function (type) {
// Explains purpose of: const cardBrand = document.getElementById("cardBrand"),
      const cardBrand = document.getElementById("cardBrand"),
// Explains purpose of: visa = "fab fa-cc-visa",
        visa = "fab fa-cc-visa",
// Explains purpose of: mastercard = "fab fa-cc-mastercard",
        mastercard = "fab fa-cc-mastercard",
// Explains purpose of: amex = "fab fa-cc-amex",
        amex = "fab fa-cc-amex",
// Explains purpose of: diners = "fab fa-cc-diners-club",
        diners = "fab fa-cc-diners-club",
// Explains purpose of: jcb = "fab fa-cc-jcb",
        jcb = "fab fa-cc-jcb",
// Explains purpose of: discover = "fab fa-cc-discover";
        discover = "fab fa-cc-discover";
  
// Explains purpose of: switch (type) {
      switch (type) {
// Explains purpose of: case "visa":
        case "visa":
// Explains purpose of: cardBrand.setAttribute("class", visa);
          cardBrand.setAttribute("class", visa);
// Explains purpose of: break;
          break;
// Explains purpose of: case "mastercard":
        case "mastercard":
// Explains purpose of: cardBrand.setAttribute("class", mastercard);
          cardBrand.setAttribute("class", mastercard);
// Explains purpose of: break;
          break;
// Explains purpose of: case "amex":
        case "amex":
// Explains purpose of: cardBrand.setAttribute("class", amex);
          cardBrand.setAttribute("class", amex);
// Explains purpose of: break;
          break;
// Explains purpose of: case "diners":
        case "diners":
// Explains purpose of: cardBrand.setAttribute("class", diners);
          cardBrand.setAttribute("class", diners);
// Explains purpose of: break;
          break;
// Explains purpose of: case "jcb":
        case "jcb":
// Explains purpose of: cardBrand.setAttribute("class", jcb);
          cardBrand.setAttribute("class", jcb);
// Explains purpose of: break;
          break;
// Explains purpose of: case "discover":
        case "discover":
// Explains purpose of: cardBrand.setAttribute("class", discover);
          cardBrand.setAttribute("class", discover);
// Explains purpose of: break;
          break;
// Explains purpose of: default:
        default:
// Explains purpose of: cardBrand.setAttribute("class", "");
          cardBrand.setAttribute("class", "");
// Explains purpose of: break;
          break;
// Explains purpose of: }
      }
// Explains purpose of: },
    },
// Explains purpose of: });
  });
  
// Explains purpose of: const cleaveDate = new Cleave("#cardExpiry", {
  const cleaveDate = new Cleave("#cardExpiry", {
// Explains purpose of: date: true,
    date: true,
// Explains purpose of: datePattern: ["m", "y"],
    datePattern: ["m", "y"],
// Explains purpose of: });
  });
  
// Explains purpose of: const cleaveCCV = new Cleave("#cardCcv", {
  const cleaveCCV = new Cleave("#cardCcv", {
// Explains purpose of: blocks: [3],
    blocks: [3],
// Explains purpose of: });
  });