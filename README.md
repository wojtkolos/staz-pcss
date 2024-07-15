
Zadanie wstępne
Za pomocą jezyka php, html5, css zaprojektuj formularz rejestracyjny, który będzie służył do zapisania osób do coworkingu futurelabs.


Formularz powinien zawierać następujące dane zbierane od osoby potencjalnie zainteresowanej rejestracją:
- Imię* (input:text)
- Nazwisko* (input:text)
- Email* (input:mail)
- Telefon* (input:phone)
- Planowany dzień rozpoczęcia korzystania z przestrzeni* (input:date z brakiem możliwości wcześniejszej daty)
- Pakiet [coworker-50pln, owner-400pln] (input:checkbox)
- Adres korespondencyjny - miejscowość* (input:text)
- Adres korespondencyjny - ulica* (input:text)
- Adres korespondencyjny - numer budynku* (input:text)
- Adres korespondencyjny - numer mieszkania (input:text)
- Adres korespondencyjny - kod pocztowy* (input:text)
- Moje zainteresowania/kompetencje * (input:textbox) [Opis pola: "Słowa kluczowe dotyczące wiedzy/umiejętności w obszarze IT lub innych obszarach, zorganizowane wydarzenia, inne"]
- Zapoznanie z Regulaminem* (input:checkbox)
- Zgoda na przetwarzanie i przechowywanie danych osobowych* (input:checkbox)
- Zgoda na przesyłanie faktur/rachunków drogą elektroniczną* (input:checkbox)
- Jestem zainteresowany otrzymywaniem ofert współpracy adekwatnie do wskazanych zainteresowan/kompetencji nie częściej niż raz w tygodniu (input:checkbox)

* Pole wymagane


Formularz powinien zawierać podstawową walidację poprawności wprowadzonych danych oraz usuwanie nieproszonych znaków  typu np. znaki html - np. za pomogą funkcji filter_var(). - więcej o https://www.tutorialrepublic.com/php-tutorial/php-filters.php. Formularz trzeba zabezpieczyć m.in. również przed wysłaniem pustych pól.

Inspiracja i przykładowa implementacja:
https://futurelabs.aproco.io/

Potrzebne narzędzia do uruchomienia:
- xamp, https://www.apachefriends.org/
- php
- github desktop
- visual studio code (bądź toższamy)
