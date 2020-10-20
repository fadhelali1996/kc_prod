<?php

use Symfony\Component\Translation\MessageCatalogue;

$catalogue = new MessageCatalogue('lt', array (
  'validators' => 
  array (
    'This value should be false.' => 'Reikšmė turi būti neigiama.',
    'This value should be true.' => 'Reikšmė turi būti teigiama.',
    'This value should be of type {{ type }}.' => 'Šios reikšmės tipas turi būti {{ type }}.',
    'This value should be blank.' => 'Ši reikšmė turi būti tuščia.',
    'The value you selected is not a valid choice.' => 'Neteisingas pasirinkimas.',
    'You must select at least {{ limit }} choice.|You must select at least {{ limit }} choices.' => 'Turite pasirinkti bent {{ limit }} variantą.|Turite pasirinkti bent {{ limit }} variantus.|Turite pasirinkti bent {{ limit }} variantų.',
    'You must select at most {{ limit }} choice.|You must select at most {{ limit }} choices.' => 'Turite pasirinkti ne daugiau kaip {{ limit }} variantą.|Turite pasirinkti ne daugiau kaip {{ limit }} variantus.|Turite pasirinkti ne daugiau kaip {{ limit }} variantų.',
    'One or more of the given values is invalid.' => 'Viena ar daugiau įvestų reikšmių yra netinkamos.',
    'This field was not expected.' => 'Nebuvo tikimasi Šis laukas.',
    'This field is missing.' => 'Šiame lauke yra dingęs.',
    'This value is not a valid date.' => 'Ši reikšmė nėra data.',
    'This value is not a valid datetime.' => 'Ši reikšmė nera data ir laikas.',
    'This value is not a valid email address.' => 'Ši reikšmė nėra tinkamas el. pašto adresas.',
    'The file could not be found.' => 'Byla nerasta.',
    'The file is not readable.' => 'Negalima nuskaityti bylos.',
    'The file is too large ({{ size }} {{ suffix }}). Allowed maximum size is {{ limit }} {{ suffix }}.' => 'Byla yra per didelė ({{ size }} {{ suffix }}). Maksimalus dydis {{ limit }} {{ suffix }}.',
    'The mime type of the file is invalid ({{ type }}). Allowed mime types are {{ types }}.' => 'Netinkamas bylos tipas (mime type) ({{ type }}). Galimi bylų tipai {{ types }}.',
    'This value should be {{ limit }} or less.' => 'Reikšmė turi būti {{ limit }} arba mažiau.',
    'This value is too long. It should have {{ limit }} character or less.|This value is too long. It should have {{ limit }} characters or less.' => 'Per didelis simbolių skaičius. Turi susidaryti iš {{ limit }} arba mažiau simbolių.|Per didelis simbolių skaičius. Turi susidaryti iš {{ limit }} arba mažiau simbolių.|Per didelis simbolių skaičius. Turi susidaryti iš {{ limit }} arba mažiau simbolių.',
    'This value should be {{ limit }} or more.' => 'Reikšmė turi būti {{ limit }} arba daugiau.',
    'This value is too short. It should have {{ limit }} character or more.|This value is too short. It should have {{ limit }} characters or more.' => 'Per mažas simbolių skaičius. Turi susidaryti iš {{ limit }} arba daugiau simbolių.|Per mažas simbolių skaičius. Turi susidaryti iš {{ limit }} arba daugiau simbolių.|Per mažas simbolių skaičius. Turi susidaryti iš {{ limit }} arba daugiau simbolių.',
    'This value should not be blank.' => 'Ši reikšmė negali būti tuščia.',
    'This value should not be null.' => 'Ši reikšmė negali būti null.',
    'This value should be null.' => 'Ši reikšmė turi būti null.',
    'This value is not valid.' => 'Netinkama reikšmė.',
    'This value is not a valid time.' => 'Ši reikšmė nėra laikas.',
    'This value is not a valid URL.' => 'Ši reikšmė nėra tinkamas interneto adresas.',
    'The two values should be equal.' => 'Abi reikšmės turi būti identiškos.',
    'The file is too large. Allowed maximum size is {{ limit }} {{ suffix }}.' => 'Byla yra per didelė. Maksimalus dydis yra {{ limit }} {{ suffix }}.',
    'The file is too large.' => 'Byla per didelė.',
    'The file could not be uploaded.' => 'Byla negali būti įkelta.',
    'This value should be a valid number.' => 'Ši reikšmė turi būti skaičius.',
    'This value is not a valid country.' => 'Ši reikšmė nėra tinkama šalis.',
    'This file is not a valid image.' => 'Byla nėra paveikslėlis.',
    'This is not a valid IP address.' => 'Ši reikšmė nėra tinkamas IP adresas.',
    'This value is not a valid language.' => 'Ši reikšmė nėra tinkama kalba.',
    'This value is not a valid locale.' => 'Ši reikšmė nėra tinkama lokalė.',
    'This value is already used.' => 'Ši reikšmė jau yra naudojama.',
    'The size of the image could not be detected.' => 'Nepavyko nustatyti nuotraukos dydžio.',
    'The image width is too big ({{ width }}px). Allowed maximum width is {{ max_width }}px.' => 'Nuotraukos plotis per didelis ({{ width }}px). Maksimalus leidžiamas plotis yra {{ max_width }}px.',
    'The image width is too small ({{ width }}px). Minimum width expected is {{ min_width }}px.' => 'Nuotraukos plotis per mažas ({{ width }}px). Minimalus leidžiamas plotis yra {{ min_width }}px.',
    'The image height is too big ({{ height }}px). Allowed maximum height is {{ max_height }}px.' => 'Nuotraukos aukštis per didelis ({{ height }}px). Maksimalus leidžiamas aukštis yra {{ max_height }}px.',
    'The image height is too small ({{ height }}px). Minimum height expected is {{ min_height }}px.' => 'Nuotraukos aukštis per mažas ({{ height }}px). Minimalus leidžiamas aukštis yra {{ min_height }}px.',
    'This value should be the user\'s current password.' => 'Ši reikšmė turi sutapti su dabartiniu naudotojo slaptažodžiu.',
    'This value should have exactly {{ limit }} character.|This value should have exactly {{ limit }} characters.' => 'Ši reikšmė turi turėti lygiai {{ limit }} simbolį.|Ši reikšmė turi turėti lygiai {{ limit }} simbolius.|Ši reikšmė turi turėti lygiai {{ limit }} simbolių.',
    'The file was only partially uploaded.' => 'Failas buvo tik dalinai įkeltas.',
    'No file was uploaded.' => 'Nebuvo įkelta jokių failų.',
    'No temporary folder was configured in php.ini.' => 'Nėra sukonfiguruoto jokio laikino katalogo php.ini faile.',
    'Cannot write temporary file to disk.' => 'Nepavyko išsaugoti laikino failo.',
    'A PHP extension caused the upload to fail.' => 'PHP plėtinys sutrukdė failo įkėlimą ir jis nepavyko.',
    'This collection should contain {{ limit }} element or more.|This collection should contain {{ limit }} elements or more.' => 'Sąraše turi būti {{ limit }} arba daugiau įrašų.|Sąraše turi būti {{ limit }} arba daugiau įrašų.|Sąraše turi būti {{ limit }} arba daugiau įrašų.',
    'This collection should contain {{ limit }} element or less.|This collection should contain {{ limit }} elements or less.' => 'Sąraše turi būti {{ limit }} arba mažiau įrašų.|Sąraše turi būti {{ limit }} arba mažiau įrašų.|Sąraše turi būti {{ limit }} arba mažiau įrašų.',
    'This collection should contain exactly {{ limit }} element.|This collection should contain exactly {{ limit }} elements.' => 'Sąraše turi būti lygiai {{ limit }} įrašas.|Sąraše turi būti lygiai {{ limit }} įrašai.|Sąraše turi būti lygiai {{ limit }} įrašų.',
    'Invalid card number.' => 'Klaidingas kortelės numeris.',
    'Unsupported card type or invalid card number.' => 'Kortelės tipas nepalaikomas arba klaidingas kortelės numeris.',
    'This is not a valid International Bank Account Number (IBAN).' => 'Ši reišmė neatitinka tarptautinio banko sąskaitos numerio formato (IBAN).',
    'This value is not a valid ISBN-10.' => 'Ši reikšmė neatitinka ISBN-10 formato.',
    'This value is not a valid ISBN-13.' => 'Ši reikšmė neatitinka ISBN-13 formato.',
    'This value is neither a valid ISBN-10 nor a valid ISBN-13.' => 'Ši reikšmė neatitinka nei ISBN-10, nei ISBN-13 formato.',
    'This value is not a valid ISSN.' => 'Ši reišmė neatitinka ISSN formato.',
    'This value is not a valid currency.' => 'Netinkamas valiutos formatas.',
    'This value should be equal to {{ compared_value }}.' => 'Ši reikšmė turi būti lygi {{ compared_value }}.',
    'This value should be greater than {{ compared_value }}.' => 'Ši reikšmė turi būti didesnė už {{ compared_value }}.',
    'This value should be greater than or equal to {{ compared_value }}.' => 'Ši reikšmė turi būti didesnė už arba lygi {{ compared_value }}.',
    'This value should be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Ši reikšmė turi būti identiška {{ compared_value_type }} {{ compared_value }}.',
    'This value should be less than {{ compared_value }}.' => 'Ši reikšmė turi būti mažesnė už {{ compared_value }}.',
    'This value should be less than or equal to {{ compared_value }}.' => 'Ši reikšmė turi būti mažesnė už arba lygi {{ compared_value }}.',
    'This value should not be equal to {{ compared_value }}.' => 'Ši reikšmė neturi būti lygi {{ compared_value }}.',
    'This value should not be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Ši reikšmė neturi būti identiška {{ compared_value_type }} {{ compared_value }}.',
    'The image ratio is too big ({{ ratio }}). Allowed maximum ratio is {{ max_ratio }}.' => 'Nuotraukos santykis yra per didelis ({{ ratio }}). Didžiausias leistinas santykis yra {{ max_ratio }}.',
    'The image ratio is too small ({{ ratio }}). Minimum ratio expected is {{ min_ratio }}.' => 'Nuotraukos santykis yra per mažas ({{ ratio }}). Mažiausias leistinas santykis yra {{ min_ratio }}.',
    'The image is square ({{ width }}x{{ height }}px). Square images are not allowed.' => 'Nuotrauka yra kvadratinė ({{ width }}x{{ height }}px). Kvadratinės nuotraukos nėra leistinos.',
    'The image is landscape oriented ({{ width }}x{{ height }}px). Landscape oriented images are not allowed.' => 'Nuotrauka orientuota į plotį ({{ width }}x{{ height }}px). Nuotraukos orientuotos į plotį nėra leistinos.',
    'The image is portrait oriented ({{ width }}x{{ height }}px). Portrait oriented images are not allowed.' => 'Nuotrauka orientuota į aukštį ({{ width }}x{{ height }}px). Nuotraukos orientuotos į aukštį nėra leistinos.',
    'An empty file is not allowed.' => 'Failas negali būti tuščias.',
    'The host could not be resolved.' => 'Serveris nepasiekiamas.',
    'This value does not match the expected {{ charset }} charset.' => 'Ši reikšmė neatitinka {{ charset }} koduotės.',
    'This is not a valid Business Identifier Code (BIC).' => 'Bendrovės Identifikavimo Kodas (BIC) nėra tinkamas.',
    'Error' => 'Klaida',
    'This is not a valid UUID.' => 'Ši reikšmė nėra tinkamas UUID.',
    'This value should be a multiple of {{ compared_value }}.' => 'Ši reikšmė turi būti skaičiaus {{ compared_value }} kartotinis.',
    'This Business Identifier Code (BIC) is not associated with IBAN {{ iban }}.' => 'Šis bendrovės identifikavimo kodas (BIC) nesusijęs su IBAN {{ iban }}.',
    'This value should be valid JSON.' => 'Ši reikšmė turi būti tinkamo JSON formato.',
    'This collection should contain only unique elements.' => 'Sąraše turi būti tik unikalios reikšmės.',
    'This value should be positive.' => 'Reikšmė turi būti teigiama.',
    'This value should be either positive or zero.' => 'Reikšmė turi būti teigiama arba lygi nuliui.',
    'This value should be negative.' => 'Reikšmė turi būti neigiama.',
    'This value should be either negative or zero.' => 'Reikšmė turi būti neigiama arba lygi nuliui.',
    'This value is not a valid timezone.' => 'Reikšmė nėra tinkama laiko juosta.',
    'This password has been leaked in a data breach, it must not be used. Please use another password.' => 'Slaptažodis yra nutekėjęs duomenų saugumo pažeidime, jo naudoti negalima. Prašome naudoti kitą slaptažodį.',
    'This value should be between {{ min }} and {{ max }}.' => 'Ši reikšmė turi būti tarp {{ min }} ir {{ max }}.',
    'This form should not contain extra fields.' => 'Forma negali turėti papildomų laukų.',
    'The uploaded file was too large. Please try to upload a smaller file.' => 'Įkelta byla yra per didelė. bandykite įkelti mažesnę.',
    'The CSRF token is invalid. Please try to resubmit the form.' => 'CSRF kodas nepriimtinas. Bandykite siųsti formos užklausą dar kartą.',
    'fos_user.username.already_used' => 'Naudotojo vardas jau užimtas.',
    'fos_user.username.blank' => 'Prašome įvesti naudotojo vardą.',
    'fos_user.username.short' => 'Naudotojo vardas per trumpas.',
    'fos_user.username.long' => 'Naudotojo vardas per ilgas.',
    'fos_user.email.already_used' => 'El. paštas jau užimtas.',
    'fos_user.email.blank' => 'Prašome įvesti el. paštą.',
    'fos_user.email.short' => 'El. paštas pert rumpas.',
    'fos_user.email.long' => 'El. paštas per ilgas.',
    'fos_user.email.invalid' => 'El. paštas neteisingas.',
    'fos_user.password.blank' => 'Prašome įvesti slaptažodį.',
    'fos_user.password.short' => 'Slaptažodis per trumpas.',
    'fos_user.password.mismatch' => 'Įvesti skirtingi slaptažodžiai.',
    'fos_user.new_password.blank' => 'Prašome įvesti naują slaptažodį.',
    'fos_user.new_password.short' => 'Naujas slaptažodis per trumpas.',
    'fos_user.current_password.invalid' => 'Neteisingai įvestas slaptažodis.',
    'fos_user.group.blank' => 'Prašome įvesti pavadinimą.',
    'fos_user.group.short' => 'Pavadinimas per trumpas.',
    'fos_user.group.long' => 'Pavadinimas per trumpas.',
    'fos_group.name.already_used' => 'Šis pavadinimas jau naudojamas.',
  ),
  'security' => 
  array (
    'An authentication exception occurred.' => 'Įvyko autentifikacijos klaida.',
    'Authentication credentials could not be found.' => 'Nepavyko rasti autentifikacijos duomenų.',
    'Authentication request could not be processed due to a system problem.' => 'Autentifikacijos užklausos nepavyko įvykdyti dėl sistemos klaidų.',
    'Invalid credentials.' => 'Klaidingi duomenys.',
    'Cookie has already been used by someone else.' => 'Slapukas buvo panaudotas kažkam kitam.',
    'Not privileged to request the resource.' => 'Neturite teisių pasiektį resursą.',
    'Invalid CSRF token.' => 'Neteisingas CSRF raktas.',
    'Digest nonce has expired.' => 'Prieigos kodas yra pasibaigęs.',
    'No authentication provider found to support the authentication token.' => 'Nerastas autentifikacijos tiekėjas, kuris palaikytų autentifikacijos raktą.',
    'No session available, it either timed out or cookies are not enabled.' => 'Sesija yra nepasiekiama, pasibaigė galiojimo laikas arba slapukai yra išjungti.',
    'No token could be found.' => 'Nepavyko rasti rakto.',
    'Username could not be found.' => 'Tokio naudotojo vardo nepavyko rasti.',
    'Account has expired.' => 'Paskyros galiojimo laikas baigėsi.',
    'Credentials have expired.' => 'Autentifikacijos duomenų galiojimo laikas baigėsi.',
    'Account is disabled.' => 'Paskyra yra išjungta.',
    'Account is locked.' => 'Paskyra yra užblokuota.',
  ),
  'FOSUserBundle' => 
  array (
    'group.edit.submit' => 'Atnaujinti grupę',
    'group.show.name' => 'Grupės vardas',
    'group.new.submit' => 'Sukurti grupę',
    'group.flash.updated' => 'Grupė atnaujinta.',
    'group.flash.created' => 'Grupė sukurta.',
    'group.flash.deleted' => 'Grupė ištrinta.',
    'security.login.username' => 'Naudotojo vardas',
    'security.login.password' => 'Slaptažodis',
    'security.login.remember_me' => 'Atsiminti',
    'security.login.submit' => 'Prisijungti',
    'profile.show.username' => 'Naudotojo vardas',
    'profile.show.email' => 'El. paštas',
    'profile.edit.submit' => 'Atnaujinti',
    'profile.flash.updated' => 'Profilis atnaujintas.',
    'change_password.submit' => 'Keisti slaptažodį',
    'change_password.flash.success' => 'Slaptažodis pakeistas.',
    'registration.check_email' => 'El. pašto pranešimas išsiųstas adresu %email%. Jame rasite nuorodą, kurią aplankę, aktyvuosite savo paskyrą.',
    'registration.confirmed' => 'Sveikiname, jūsų paskyra aktyvuota.',
    'registration.back' => 'Grįžti atgal',
    'registration.submit' => 'Registruotis',
    'registration.flash.user_created' => 'Naudotojas sukurtas.',
    'registration.email.subject' => 'Registracijos patvirtinimas',
    'registration.email.message' => 'Sveiki %username%!

Norėdami aktyvuoti savo paskyrą, apsilankykite adresu %confirmationUrl%

Pagarbiai,
Komanda.
',
    'resetting.request.username' => 'Naudotojo vardas arba el. paštas',
    'resetting.request.submit' => 'Tęsti',
    'resetting.reset.submit' => 'Pakeisti slaptažodį',
    'resetting.flash.success' => 'Slaptažodis pakeistas.',
    'resetting.email.subject' => 'Slaptažodžio keitimas',
    'resetting.email.message' => 'Sveiki %username%!

Norėdami pakeisti savo slaptažodį, apsilankykite adresu %confirmationUrl%

Pagarbiai,
Komanda.
',
    'layout.logout' => 'Atsijungti',
    'layout.login' => 'Prisijungti',
    'layout.register' => 'Registruotis',
    'layout.logged_in_as' => 'Prisijungęs kaip %username%',
    'form.group_name' => 'Grupės vardas',
    'form.username' => 'Naudotojo vardas',
    'form.email' => 'El. paštas',
    'form.current_password' => 'Dabartinis slaptažodis',
    'form.password' => 'Slaptažodis',
    'form.password_confirmation' => 'Pakartoti slaptažodį',
    'form.new_password' => 'Naujas slaptažodis',
    'form.new_password_confirmation' => 'Naujas slaptažodis (pakartoti)',
  ),
));

$catalogueFr = new MessageCatalogue('fr', array (
  'validators' => 
  array (
    'This value should be false.' => 'Cette valeur doit être fausse.',
    'This value should be true.' => 'Cette valeur doit être vraie.',
    'This value should be of type {{ type }}.' => 'Cette valeur doit être de type {{ type }}.',
    'This value should be blank.' => 'Cette valeur doit être vide.',
    'The value you selected is not a valid choice.' => 'Cette valeur doit être l\'un des choix proposés.',
    'You must select at least {{ limit }} choice.|You must select at least {{ limit }} choices.' => 'Vous devez sélectionner au moins {{ limit }} choix.|Vous devez sélectionner au moins {{ limit }} choix.',
    'You must select at most {{ limit }} choice.|You must select at most {{ limit }} choices.' => 'Vous devez sélectionner au maximum {{ limit }} choix.|Vous devez sélectionner au maximum {{ limit }} choix.',
    'One or more of the given values is invalid.' => 'Une ou plusieurs des valeurs soumises sont invalides.',
    'This field was not expected.' => 'Ce champ n\'a pas été prévu.',
    'This field is missing.' => 'Ce champ est manquant.',
    'This value is not a valid date.' => 'Cette valeur n\'est pas une date valide.',
    'This value is not a valid datetime.' => 'Cette valeur n\'est pas une date valide.',
    'This value is not a valid email address.' => 'Cette valeur n\'est pas une adresse email valide.',
    'The file could not be found.' => 'Le fichier n\'a pas été trouvé.',
    'The file is not readable.' => 'Le fichier n\'est pas lisible.',
    'The file is too large ({{ size }} {{ suffix }}). Allowed maximum size is {{ limit }} {{ suffix }}.' => 'Le fichier est trop volumineux ({{ size }} {{ suffix }}). Sa taille ne doit pas dépasser {{ limit }} {{ suffix }}.',
    'The mime type of the file is invalid ({{ type }}). Allowed mime types are {{ types }}.' => 'Le type du fichier est invalide ({{ type }}). Les types autorisés sont {{ types }}.',
    'This value should be {{ limit }} or less.' => 'Cette valeur doit être inférieure ou égale à {{ limit }}.',
    'This value is too long. It should have {{ limit }} character or less.|This value is too long. It should have {{ limit }} characters or less.' => 'Cette chaîne est trop longue. Elle doit avoir au maximum {{ limit }} caractère.|Cette chaîne est trop longue. Elle doit avoir au maximum {{ limit }} caractères.',
    'This value should be {{ limit }} or more.' => 'Cette valeur doit être supérieure ou égale à {{ limit }}.',
    'This value is too short. It should have {{ limit }} character or more.|This value is too short. It should have {{ limit }} characters or more.' => 'Cette chaîne est trop courte. Elle doit avoir au minimum {{ limit }} caractère.|Cette chaîne est trop courte. Elle doit avoir au minimum {{ limit }} caractères.',
    'This value should not be blank.' => 'Cette valeur ne doit pas être vide.',
    'This value should not be null.' => 'Cette valeur ne doit pas être nulle.',
    'This value should be null.' => 'Cette valeur doit être nulle.',
    'This value is not valid.' => 'Cette valeur n\'est pas valide.',
    'This value is not a valid time.' => 'Cette valeur n\'est pas une heure valide.',
    'This value is not a valid URL.' => 'Cette valeur n\'est pas une URL valide.',
    'The two values should be equal.' => 'Les deux valeurs doivent être identiques.',
    'The file is too large. Allowed maximum size is {{ limit }} {{ suffix }}.' => 'Le fichier est trop volumineux. Sa taille ne doit pas dépasser {{ limit }} {{ suffix }}.',
    'The file is too large.' => 'Le fichier est trop volumineux.',
    'The file could not be uploaded.' => 'Le téléchargement de ce fichier est impossible.',
    'This value should be a valid number.' => 'Cette valeur doit être un nombre.',
    'This file is not a valid image.' => 'Ce fichier n\'est pas une image valide.',
    'This is not a valid IP address.' => 'Cette adresse IP n\'est pas valide.',
    'This value is not a valid language.' => 'Cette langue n\'est pas valide.',
    'This value is not a valid locale.' => 'Ce paramètre régional n\'est pas valide.',
    'This value is not a valid country.' => 'Ce pays n\'est pas valide.',
    'This value is already used.' => 'Cette valeur est déjà utilisée.',
    'The size of the image could not be detected.' => 'La taille de l\'image n\'a pas pu être détectée.',
    'The image width is too big ({{ width }}px). Allowed maximum width is {{ max_width }}px.' => 'La largeur de l\'image est trop grande ({{ width }}px). La largeur maximale autorisée est de {{ max_width }}px.',
    'The image width is too small ({{ width }}px). Minimum width expected is {{ min_width }}px.' => 'La largeur de l\'image est trop petite ({{ width }}px). La largeur minimale attendue est de {{ min_width }}px.',
    'The image height is too big ({{ height }}px). Allowed maximum height is {{ max_height }}px.' => 'La hauteur de l\'image est trop grande ({{ height }}px). La hauteur maximale autorisée est de {{ max_height }}px.',
    'The image height is too small ({{ height }}px). Minimum height expected is {{ min_height }}px.' => 'La hauteur de l\'image est trop petite ({{ height }}px). La hauteur minimale attendue est de {{ min_height }}px.',
    'This value should be the user\'s current password.' => 'Cette valeur doit être le mot de passe actuel de l\'utilisateur.',
    'This value should have exactly {{ limit }} character.|This value should have exactly {{ limit }} characters.' => 'Cette chaîne doit avoir exactement {{ limit }} caractère.|Cette chaîne doit avoir exactement {{ limit }} caractères.',
    'The file was only partially uploaded.' => 'Le fichier a été partiellement transféré.',
    'No file was uploaded.' => 'Aucun fichier n\'a été transféré.',
    'No temporary folder was configured in php.ini.' => 'Aucun répertoire temporaire n\'a été configuré dans le php.ini.',
    'Cannot write temporary file to disk.' => 'Impossible d\'écrire le fichier temporaire sur le disque.',
    'A PHP extension caused the upload to fail.' => 'Une extension PHP a empêché le transfert du fichier.',
    'This collection should contain {{ limit }} element or more.|This collection should contain {{ limit }} elements or more.' => 'Cette collection doit contenir {{ limit }} élément ou plus.|Cette collection doit contenir {{ limit }} éléments ou plus.',
    'This collection should contain {{ limit }} element or less.|This collection should contain {{ limit }} elements or less.' => 'Cette collection doit contenir {{ limit }} élément ou moins.|Cette collection doit contenir {{ limit }} éléments ou moins.',
    'This collection should contain exactly {{ limit }} element.|This collection should contain exactly {{ limit }} elements.' => 'Cette collection doit contenir exactement {{ limit }} élément.|Cette collection doit contenir exactement {{ limit }} éléments.',
    'Invalid card number.' => 'Numéro de carte invalide.',
    'Unsupported card type or invalid card number.' => 'Type de carte non supporté ou numéro invalide.',
    'This is not a valid International Bank Account Number (IBAN).' => 'Le numéro IBAN (International Bank Account Number) saisi n\'est pas valide.',
    'This value is not a valid ISBN-10.' => 'Cette valeur n\'est pas un code ISBN-10 valide.',
    'This value is not a valid ISBN-13.' => 'Cette valeur n\'est pas un code ISBN-13 valide.',
    'This value is neither a valid ISBN-10 nor a valid ISBN-13.' => 'Cette valeur n\'est ni un code ISBN-10, ni un code ISBN-13 valide.',
    'This value is not a valid ISSN.' => 'Cette valeur n\'est pas un code ISSN valide.',
    'This value is not a valid currency.' => 'Cette valeur n\'est pas une devise valide.',
    'This value should be equal to {{ compared_value }}.' => 'Cette valeur doit être égale à {{ compared_value }}.',
    'This value should be greater than {{ compared_value }}.' => 'Cette valeur doit être supérieure à {{ compared_value }}.',
    'This value should be greater than or equal to {{ compared_value }}.' => 'Cette valeur doit être supérieure ou égale à {{ compared_value }}.',
    'This value should be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Cette valeur doit être identique à {{ compared_value_type }} {{ compared_value }}.',
    'This value should be less than {{ compared_value }}.' => 'Cette valeur doit être inférieure à {{ compared_value }}.',
    'This value should be less than or equal to {{ compared_value }}.' => 'Cette valeur doit être inférieure ou égale à {{ compared_value }}.',
    'This value should not be equal to {{ compared_value }}.' => 'Cette valeur ne doit pas être égale à {{ compared_value }}.',
    'This value should not be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Cette valeur ne doit pas être identique à {{ compared_value_type }} {{ compared_value }}.',
    'The image ratio is too big ({{ ratio }}). Allowed maximum ratio is {{ max_ratio }}.' => 'Le rapport largeur/hauteur de l\'image est trop grand ({{ ratio }}). Le rapport maximal autorisé est {{ max_ratio }}.',
    'The image ratio is too small ({{ ratio }}). Minimum ratio expected is {{ min_ratio }}.' => 'Le rapport largeur/hauteur de l\'image est trop petit ({{ ratio }}). Le rapport minimal attendu est {{ min_ratio }}.',
    'The image is square ({{ width }}x{{ height }}px). Square images are not allowed.' => 'L\'image est carrée ({{ width }}x{{ height }}px). Les images carrées ne sont pas autorisées.',
    'The image is landscape oriented ({{ width }}x{{ height }}px). Landscape oriented images are not allowed.' => 'L\'image est au format paysage ({{ width }}x{{ height }}px). Les images au format paysage ne sont pas autorisées.',
    'The image is portrait oriented ({{ width }}x{{ height }}px). Portrait oriented images are not allowed.' => 'L\'image est au format portrait ({{ width }}x{{ height }}px). Les images au format portrait ne sont pas autorisées.',
    'An empty file is not allowed.' => 'Un fichier vide n\'est pas autorisé.',
    'The host could not be resolved.' => 'Le nom de domaine n\'a pas pu être résolu.',
    'This value does not match the expected {{ charset }} charset.' => 'Cette valeur ne correspond pas au jeu de caractères {{ charset }} attendu.',
    'This is not a valid Business Identifier Code (BIC).' => 'Ce n\'est pas un code universel d\'identification des banques (BIC) valide.',
    'Error' => 'Erreur',
    'This is not a valid UUID.' => 'Ceci n\'est pas un UUID valide.',
    'This value should be a multiple of {{ compared_value }}.' => 'Cette valeur doit être un multiple de {{ compared_value }}.',
    'This Business Identifier Code (BIC) is not associated with IBAN {{ iban }}.' => 'Ce code d\'identification d\'entreprise (BIC) n\'est pas associé à l\'IBAN {{ iban }}.',
    'This value should be valid JSON.' => 'Cette valeur doit être un JSON valide.',
    'This collection should contain only unique elements.' => 'Cette collection ne doit pas comporter de doublons.',
    'This value should be positive.' => 'Cette valeur doit être strictement positive.',
    'This value should be either positive or zero.' => 'Cette valeur doit être supérieure ou égale à zéro.',
    'This value should be negative.' => 'Cette valeur doit être strictement négative.',
    'This value should be either negative or zero.' => 'Cette valeur doit être inférieure ou égale à zéro.',
    'This value is not a valid timezone.' => 'Cette valeur n\'est pas un fuseau horaire valide.',
    'This password has been leaked in a data breach, it must not be used. Please use another password.' => 'Ce mot de passe a été divulgué lors d\'une fuite de données, il ne doit plus être utilisé. Veuillez utiliser un autre mot de passe.',
    'This value should be between {{ min }} and {{ max }}.' => 'Cette valeur doit être comprise entre {{ min }} et {{ max }}.',
    'This form should not contain extra fields.' => 'Ce formulaire ne doit pas contenir des champs supplémentaires.',
    'The uploaded file was too large. Please try to upload a smaller file.' => 'Le fichier téléchargé est trop volumineux. Merci d\'essayer d\'envoyer un fichier plus petit.',
    'The CSRF token is invalid. Please try to resubmit the form.' => 'Le jeton CSRF est invalide. Veuillez renvoyer le formulaire.',
    'fos_user.username.already_used' => 'Le nom d\'utilisateur est déjà utilisé.',
    'fos_user.username.blank' => 'Entrez un nom d\'utilisateur s\'il vous plait.',
    'fos_user.username.short' => 'Le nom d\'utilisateur est trop court.',
    'fos_user.username.long' => 'Le nom d\'utilisateur est trop long.',
    'fos_user.email.already_used' => 'L\'adresse e-mail est déjà utilisée.',
    'fos_user.email.blank' => 'Entrez une adresse e-mail s\'il vous plait.',
    'fos_user.email.short' => 'L\'adresse e-mail est trop courte.',
    'fos_user.email.long' => 'L\'adresse e-mail est trop longue.',
    'fos_user.email.invalid' => 'L\'adresse e-mail est invalide.',
    'fos_user.password.blank' => 'Entrez un mot de passe s\'il vous plait.',
    'fos_user.password.short' => 'Le mot de passe est trop court.',
    'fos_user.password.mismatch' => 'Les deux mots de passe ne sont pas identiques.',
    'fos_user.new_password.blank' => 'Entrez un nouveau mot de passe s\'il vous plait.',
    'fos_user.new_password.short' => 'Le nouveau mot de passe est trop court.',
    'fos_user.current_password.invalid' => 'Le mot de passe est invalide.',
    'fos_user.group.blank' => 'Entrez un nom s\'il vous plait.',
    'fos_user.group.short' => 'Le nom est trop court.',
    'fos_user.group.long' => 'Le nom est trop long.',
    'fos_group.name.already_used' => 'Le nom est déjà utilisé.',
    'fos_message.recipient.blank' => 'Pas de destinataire spécifié',
    'fos_message.recipients.blank' => 'Pas de destinataires spécifié',
    'fos_message.subject.blank' => 'Vous devez entrer un sujet',
    'fos_message.subject.short' => 'Le sujet est trop court|Le sujet est trop court',
    'fos_message.subject.long' => 'Le sujet est trop long|Le sujet est trop long',
    'fos_message.body.blank' => 'Vous devez entrer un message',
    'fos_message.body.short' => 'Le message est trop court',
    'fos_message.body.spam' => 'Il semble que votre message soit un SPAM, il n\'a pas été envoyé',
    'fos_message.not_authorized' => 'Vous n\'avez pas le droit d\'envoyer ce message',
    'fos_message.reply_not_authorized' => 'Vous n\'avez pas de droit de répondre dans cette discussion',
    'fos_message.self_recipient' => 'Vous ne pouvez pas vous envoyer un message à vous-même',
  ),
  'security' => 
  array (
    'An authentication exception occurred.' => 'Une exception d\'authentification s\'est produite.',
    'Authentication credentials could not be found.' => 'Les identifiants d\'authentification n\'ont pas pu être trouvés.',
    'Authentication request could not be processed due to a system problem.' => 'La requête d\'authentification n\'a pas pu être executée à cause d\'un problème système.',
    'Invalid credentials.' => 'Identifiants invalides.',
    'Cookie has already been used by someone else.' => 'Le cookie a déjà été utilisé par quelqu\'un d\'autre.',
    'Not privileged to request the resource.' => 'Privilèges insuffisants pour accéder à la ressource.',
    'Invalid CSRF token.' => 'Jeton CSRF invalide.',
    'Digest nonce has expired.' => 'Le digest nonce a expiré.',
    'No authentication provider found to support the authentication token.' => 'Aucun fournisseur d\'authentification n\'a été trouvé pour supporter le jeton d\'authentification.',
    'No session available, it either timed out or cookies are not enabled.' => 'Aucune session disponible, celle-ci a expiré ou les cookies ne sont pas activés.',
    'No token could be found.' => 'Aucun jeton n\'a pu être trouvé.',
    'Username could not be found.' => 'Le nom d\'utilisateur n\'a pas pu être trouvé.',
    'Account has expired.' => 'Le compte a expiré.',
    'Credentials have expired.' => 'Les identifiants ont expiré.',
    'Account is disabled.' => 'Le compte est désactivé.',
    'Account is locked.' => 'Le compte est bloqué.',
  ),
  'messages' => 
  array (
    'hello' => '3aslema',
  ),
  'FOSUserBundle' => 
  array (
    'group.edit.submit' => 'Mettre à jour le groupe',
    'group.show.name' => 'Nom du groupe',
    'group.new.submit' => 'Créer le groupe',
    'group.flash.updated' => 'Le groupe a été mis à jour.',
    'group.flash.created' => 'Le groupe a été créé.',
    'group.flash.deleted' => 'Le groupe a été supprimé.',
    'security.login.username' => 'Nom d\'utilisateur',
    'security.login.password' => 'Mot de passe',
    'security.login.remember_me' => 'Se souvenir de moi',
    'security.login.submit' => 'Connexion',
    'profile.show.username' => 'Nom d\'utilisateur',
    'profile.show.email' => 'Adresse e-mail',
    'profile.edit.submit' => 'Mettre à jour',
    'profile.flash.updated' => 'Le profil a été mis à jour.',
    'change_password.submit' => 'Modifier le mot de passe',
    'change_password.flash.success' => 'Le mot de passe a été modifié.',
    'registration.check_email' => 'Un e-mail a été envoyé à l\'adresse %email%. Il contient un lien d\'activation sur lequel il vous faudra cliquer afin d\'activer votre compte.',
    'registration.confirmed' => 'Félicitations %username%, votre compte est maintenant activé.',
    'registration.back' => 'Retour à la page d\'origine.',
    'registration.submit' => 'Créer un compte',
    'registration.flash.user_created' => 'L\'utilisateur a été créé avec succès.',
    'registration.email.subject' => 'Kc_Prod confirmation',
    'registration.email.message' => 'Salut %username% !


Pour valider votre compte utilisateur, merci de vous rendre sur %confirmationUrl%

Ce lien ne peut être utilisé qu\'une seule fois pour valider votre compte.

Cordialement,
L\'équipe kc_prod 
',
    'resetting.check_email' => 'Un e-mail a été envoyé. Il contient un lien sur lequel il vous faudra cliquer pour réinitialiser votre mot de passe.
Remarque : Vous ne pouvez demander un nouveau mot de passe que toutes les %tokenLifetime% heures.

Si vous ne recevez pas un email, vérifiez votre dossier spam ou essayez à nouveau.
',
    'resetting.request.username' => 'Nom d\'utilisateur ou adresse e-mail',
    'resetting.request.submit' => 'Réinitialiser le mot de passe',
    'resetting.reset.submit' => 'Modifier le mot de passe',
    'resetting.flash.success' => 'Le mot de passe a été réinitialisé avec succès.',
    'resetting.email.subject' => 'Réinitialisation de votre mot de passe',
    'resetting.email.message' => 'Salut %username% !

Pour réinitialiser votre mot de passe, merci de vous rendre sur %confirmationUrl%

Cordialement,
L\'équipe kc_prod 
',
    'layout.logout' => 'Déconnexion',
    'layout.login' => 'Connexion',
    'layout.register' => 'Inscription',
    'layout.logged_in_as' => 'Connecté en tant que %username%',
    'form.group_name' => 'Nom du groupe',
    'form.username' => 'Nom d\'utilisateur',
    'form.email' => 'Adresse e-mail',
    'form.current_password' => 'Mot de passe actuel',
    'form.password' => 'Mot de passe',
    'form.password_confirmation' => 'Répéter le mot de passe',
    'form.new_password' => 'Nouveau mot de passe',
    'form.new_password_confirmation' => 'Répéter le nouveau mot de passe',
  ),
  'MgiletNotificationBundle' => 
  array (
    'notifications' => 'Notifications',
    'mark_all_as_seen' => 'Tout marquer comme lu',
    'mark_as_seen' => 'Marquer comme lu',
    'mark_as_unseen' => 'Marquer comme non lu',
    'all_notifications' => 'Toutes mes notifications',
    'no_new_notification' => 'Pas de nouvelles notifications',
  ),
  'FOSMessageBundle' => 
  array (
    'messenger' => 'Messagerie',
    'inbox' => 'Boîte de réception',
    'sent' => 'Envoyés',
    'deleted' => 'Supprimés',
    'send_new' => 'Envoyer un nouveau message',
    'search' => 'Rechercher',
    'threads_found' => '%num% conversation trouvée avec | %num% conversations trouvées avec',
    'message_info' => 'De %sender%, le %date%',
    'reply' => 'Répondre',
    'subject' => 'Sujet',
    'starter' => 'Débuté par',
    'startdate' => 'Débuté le',
    'messages' => 'Messages',
    'last_message' => 'Dernier message',
    'actions' => 'Actions',
    'new' => 'Nouveau',
    'goto_last' => 'Aller au dernier message',
    'on' => 'Le %date%',
    'by' => 'De %sender%',
    'no_thread' => 'Aucune conversation',
    'delete' => 'Supprimer',
    'undelete' => 'Restaurer',
    'recipient' => 'Destinataire',
    'recipients' => 'Destinataires',
    'body' => 'Corps',
  ),
));
$catalogue->addFallbackCatalogue($catalogueFr);

return $catalogue;