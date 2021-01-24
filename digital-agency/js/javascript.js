function changeSelect(chosen_package) {
    $('#package').val(chosen_package);
}

let counter = 0;

let perks = [
    "Deine Website ohne Aufwand – zum Fixpreis.",
    "Online Shop statt Corona-Stop.",
    "Deine neue Website - Google optimiert und ohne Aufwand."]

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






$('#getInfos').click(function () {
    if($('#beratungmail').type === 'text') {
        $('#beratungmail').type = 'email';
        event.preventDefault();
    }
})