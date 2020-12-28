function changeSelect(chosen_package) {
    $('#package').val(chosen_package);
}

let counter = 0;

let perks = [
    "Professionelle Websites – ohne Kopfschmerzen – full service!",
    "In einfachen Paketen – für Ihr Business",
    "Webseiten die einfach funktionieren ohne Aufwand",
    "100% Preisgarantie – 100% Erfolg für ihr Business"]

function changePerks() {

    let perksElement = $('#perks');

    perksElement.fadeOut(() => {
        perksElement.html(perks[counter]);
        perksElement.fadeIn();
    });

    if (counter === perks.length-1) {
        counter = 0;
    } else {
        counter++;
    }

    setTimeout(changePerks, 6000);
}

changePerks();