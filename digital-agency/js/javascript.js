function changeSelect(chosen_package) {
   $('#package').val(chosen_package);
}

let counter = 0;

let perks = [
      "Wir setzen deine Wunsch-Website in Rekordzeit um. Und das ganz ohne Probleme oder jegliche Komplikationen.",
      "Professionelle Websites – ohne Kopfschmerzen – full service!",
      "In einfachen Paketen – für Ihr Business",
      "Webseiten die einfach funktionieren ohne Aufwand",
      "100% Preisgarantie – 100% Erfolg für ihr Business"]

$('#perks2').hide();

function changePerks() {
   counter++;

   if(counter % 2 === 0) {
      $('#perks1').fadeOut();
      $('#perks2').innerHTML = perks[counter]
      $('#perks2').fadeIn();
   } else {
      $('#perks2').fadeOut();
      $('#perks1').innerHTML = perks[counter]
      $('#perks1').fadeIn();
   }

   if(counter === 3) {
      counter = 0;
   }

   setTimeout(changePerks, 6000);
}

changePerks();