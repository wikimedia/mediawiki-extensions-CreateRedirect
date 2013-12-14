<?php
/**
 * Internationalization file for CreateRedirect extension.
 *
 * @file
 * @ingroup Extensions
 */

$messages = array();

/** English
 * @author Marco Zafra
 */
$messages['en'] = array(
	'createredirect' => 'Create Redirect',
	'createredirect-desc' => 'Adds special page [[Special:CreateRedirect|CreateRedirect]] to easily create redirects',
	'createredirect-error' => 'Error: Authentication failed.', // TODO: Figure out error cases. One message just is not going to do. --Digi 11/5/07
	'createredirect-instructions' => 'Using the form below, you can create a redirect page or replace an existing page with a redirect.',
	'createredirect-page-title' => 'Page title:',
	'createredirect-redirect-done' => 'Redirect created from "$1" to "$2"',
	'createredirect-redirect-to' => 'Redirect to:',
	'createredirect-save' => 'Save page',
);

/** Message documentation (Message documentation)
 * @author Shirayuki
 * @author The Evil IP address
 */
$messages['qqq'] = array(
	'createredirect' => '{{doc-special|CreateRedirect}}',
	'createredirect-desc' => '{{desc|name=Create Redirect|url=http://www.mediawiki.org/wiki/Extension:CreateRedirect}}',
	'createredirect-error' => 'Unused at this time.

Used as error message.',
	'createredirect-instructions' => 'Used as instructions message.

This message is followed by the Redirect form.',
	'createredirect-page-title' => 'Used as label for Original Title input box.
{{Identical|Page title}}',
	'createredirect-redirect-done' => 'This message indicates the redirect $2 (from the page $1) has been created successfully.

Parameters:
* $1 - original title
* $2 - redirect title',
	'createredirect-redirect-to' => 'Used as label for Redirect Title input box.',
	'createredirect-save' => 'Used as Submit button text.
{{Identical|Save page}}',
);

/** Afrikaans (Afrikaans)
 * @author Naudefj
 */
$messages['af'] = array(
	'createredirect' => 'Skep Aanstuur',
	'createredirect-page-title' => 'Bladsynaam:',
	'createredirect-redirect-done' => 'Aanstuur vanaf "$1" na "$2" geskep',
	'createredirect-redirect-to' => 'Stuur aan na:',
	'createredirect-save' => 'Stoor bladsy',
);

/** Arabic (العربية)
 * @author روخو
 */
$messages['ar'] = array(
	'createredirect-redirect-to' => 'إعادة توجيه إلى:',
	'createredirect-save' => 'احفظ الصفحة',
);

/** Asturian (asturianu)
 * @author Xuacu
 */
$messages['ast'] = array(
	'createredirect' => 'Crear una redireición',
	'createredirect-desc' => 'Amiesta la páxina especial [[Special:CreateRedirect|CreateRedirect]] pa crear redireiciones de manera fácil',
	'createredirect-error' => 'Error : Falló la identificación.',
	'createredirect-instructions' => "Emplegando'l formulariu d'abaxo, pues crear una páxina de redireición o trocar una páxina esistente por una redireición.",
	'createredirect-page-title' => 'Títulu de la páxina:',
	'createredirect-redirect-done' => 'Redireición creada de «$1» a «$2»',
	'createredirect-redirect-to' => 'Redirixir a:',
	'createredirect-save' => 'Grabar páxina',
);

/** Azerbaijani (azərbaycanca)
 * @author Cekli829
 */
$messages['az'] = array(
	'createredirect-save' => 'Səhifəni qeyd et',
);

/** Bashkir (башҡортса)
 * @author Ләйсән
 */
$messages['ba'] = array(
	'createredirect-page-title' => 'Биттең исеме:',
	'createredirect-redirect-to' => 'Йүнәлтергә:',
);

/** Belarusian (беларуская)
 * @author Хомелка
 */
$messages['be'] = array(
	'createredirect' => 'Стварыць перанакіраванне',
	'createredirect-page-title' => 'Назва старонкі',
	'createredirect-save' => 'Захаваць старонку',
);

/** Belarusian (Taraškievica orthography) (беларуская (тарашкевіца)‎)
 * @author EugeneZelenko
 * @author Jim-by
 * @author Wizardist
 */
$messages['be-tarask'] = array(
	'createredirect' => 'Стварыць перанакіраваньне',
	'createredirect-desc' => 'Дадае спэцыяльную старонку для лёгкага [[Special:CreateRedirect|стварэньня перанакіраваньняў]]',
	'createredirect-error' => 'Памылка: немагчыма аўтэнтыфікаць.',
	'createredirect-instructions' => 'З дапамогай формы ніжэй Вы можаце ствараць старонкі-перанакіраваньні ці замяняць існуючыя старонкі перанакіраваньнямі.',
	'createredirect-page-title' => 'Назва старонкі:',
	'createredirect-redirect-done' => 'Створанае перанакіраваньне з «$1» на «$2».',
	'createredirect-redirect-to' => 'Перанакіраваньне на:',
	'createredirect-save' => 'Захаваць старонку',
);

/** Bengali (বাংলা)
 * @author Wikitanvir
 */
$messages['bn'] = array(
	'createredirect' => 'পুনর্নির্দেশনা তৈরি',
	'createredirect-desc' => 'সহজে পুনর্নির্দেশনা তৈরি করতে বিশে পাতা [[Special:CreateRedirect|ক্রিয়েটরিডাইরেক্ট]] যোগ করো',
	'createredirect-error' => 'ত্রুটি: নিশ্চিতকরণ ব্যর্থ।',
	'createredirect-instructions' => 'নিচের ফর্মটি পূরণের মাধ্যমে আপনি একটি পুনর্নির্দেশিত পাতা তৈরি করতে পারবেন, বা ইতিমধ্যেই আছে এমন পাতাকে একটি পুনর্নির্দেশিত পাতা দিয়ে প্রতিস্থাপিত করতে পারবেন।',
	'createredirect-page-title' => 'পাতার শিরোনাম:',
	'createredirect-redirect-done' => '"$1" থেকে "$2"-এ পুনর্নির্দেশনা তৈরি হয়েছে',
	'createredirect-redirect-to' => 'যে পাতায় পুননির্দেশিত হয়েছে:',
	'createredirect-save' => 'সংরক্ষণ',
);

/** Breton (brezhoneg)
 * @author Fulup
 * @author Y-M D
 */
$messages['br'] = array(
	'createredirect' => 'Krouiñ un adkas',
	'createredirect-desc' => 'Ouzhpennañ a ra ur bajenn dibar [[Special:CreateRedirect|Krouiñ un adkas]] evit krouiñ adkasoù en un doare aes',
	'createredirect-error' => "Fazi : Gwiriekadur c'hwitet.",
	'createredirect-instructions' => "En ur ober gant ar furmskrid a-is e c'hallit krouiñ ur bajenn adkas pe lakaat un adkas e-lec'h ur bajenn zo anezhi dija.",
	'createredirect-page-title' => 'Titl ar bajenn :',
	'createredirect-redirect-done' => 'Adkas krouet eus "$1" davet "$2"',
	'createredirect-redirect-to' => 'Adkas davet :',
	'createredirect-save' => 'Enrollañ ar bajenn',
);

/** Bosnian (bosanski)
 * @author CERminator
 */
$messages['bs'] = array(
	'createredirect' => 'Pravljenje preusmjerenja',
	'createredirect-desc' => 'Dodaje posebnu stranicu [[Special:CreateRedirect|Napravi Preusmjerenje]] za lahko pravljenje preusmjerenja',
	'createredirect-error' => 'Greška: Autentifikacija nije uspjela.',
	'createredirect-instructions' => 'Koristeći obrazac ispod, možete napraviti stranicu za preusmjeravanje ili zamijeniti postojeću stranicu sa preusmjeravanjem.',
	'createredirect-page-title' => 'Naslov stranice:',
	'createredirect-redirect-done' => 'Napravljeno preusmjerenje sa "$1" na "$2"',
	'createredirect-redirect-to' => 'Preusmjerenje na:',
	'createredirect-save' => 'Spremi stranicu',
);

/** Catalan (català)
 * @author Arnaugir
 */
$messages['ca'] = array(
	'createredirect' => 'Crea una redirecció',
	'createredirect-page-title' => 'Títol de la pàgina:',
	'createredirect-redirect-done' => 'Redirigir creada de "$1" a "$2"',
	'createredirect-redirect-to' => 'Redirigeix a:',
	'createredirect-save' => 'Desa la pàgina',
);

/** Chechen (нохчийн)
 * @author Умар
 */
$messages['ce'] = array(
	'createredirect-page-title' => 'АгӀона цӀе:',
);

/** Sorani Kurdish (کوردی)
 * @author Calak
 */
$messages['ckb'] = array(
	'createredirect-page-title' => 'سەردێڕی پەڕە:',
);

/** Czech (čeština)
 * @author Jkjk
 * @author Vks
 */
$messages['cs'] = array(
	'createredirect' => 'Vytvořit přesměrování',
	'createredirect-error' => 'Chyba: Ověření se nezdařilo.',
	'createredirect-page-title' => 'Název stránky:',
);

/** Welsh (Cymraeg)
 * @author Lloffiwr
 */
$messages['cy'] = array(
	'createredirect' => 'Gosod Ailgyfeiriad',
	'createredirect-desc' => "Yn ychwanegu tudalen arbennig [[Special:CreateRedirect|CreateRedirect]] sy'n gosod ailgyfeiriadau'n ddi-drafferth",
	'createredirect-error' => 'Gwall: Methwyd â dilysu.',
	'createredirect-instructions' => "Gan ddefnyddio'r ffurflen isod, gallwch osod tudalen ailgyfeirio neu ddisodli tudalen gydag ailgyfeiriad.",
	'createredirect-page-title' => 'Teitl y dudalen:',
	'createredirect-redirect-done' => 'Gosodwyd ailgyfeiriad o "$1" i "$2"',
	'createredirect-redirect-to' => 'Ailgyfeirio i:',
	'createredirect-save' => 'Cadwer y dudalen',
);

/** Danish (dansk)
 * @author Sarrus
 */
$messages['da'] = array(
	'createredirect' => 'Opret omdirigering',
	'createredirect-page-title' => 'Sidetitel:',
	'createredirect-redirect-done' => 'En omdirigering fra "$1" til "$2" er oprettet',
	'createredirect-redirect-to' => 'Omdiriger til:',
	'createredirect-save' => 'Gem side',
);

/** German (Deutsch)
 * @author Kghbln
 * @author The Evil IP address
 */
$messages['de'] = array(
	'createredirect' => 'Weiterleitung erstellen',
	'createredirect-desc' => '[[Special:CreateRedirect|Spezialseite]] zum einfachen Erstellen von Weiterleitungen',
	'createredirect-error' => 'Fehler: Authentifizierung fehlgeschlagen.',
	'createredirect-instructions' => 'Mit diesem Formular kannst du eine Weiterleitung erstellen oder eine existierende Seite durch eine Weiterleitung ersetzen.',
	'createredirect-page-title' => 'Seitenname:',
	'createredirect-redirect-done' => 'Weiterleitung von „$1“ auf „$2“ erstellt',
	'createredirect-redirect-to' => 'Weiterleiten nach:',
	'createredirect-save' => 'Seite speichern',
);

/** German (formal address) (Deutsch (Sie-Form)‎)
 * @author The Evil IP address
 */
$messages['de-formal'] = array(
	'createredirect-instructions' => 'Mit diesem Formular können Sie eine Weiterleitung erstellen oder eine existierende Seite durch eine Weiterleitung ersetzen.',
);

/** Zazaki (Zazaki)
 * @author Erdemaslancan
 */
$messages['diq'] = array(
	'createredirect' => 'Hetenayış vırazê',
	'createredirect-error' => 'Xırab:Araşt kerdış nêbı',
	'createredirect-page-title' => 'Sernamey pela:',
	'createredirect-redirect-done' => '"$1" ra "$2" hetanayış vıraziya',
	'createredirect-redirect-to' => 'Hetanayışê cı:',
	'createredirect-save' => 'Perer qeyd ke',
);

/** Lower Sorbian (dolnoserbski)
 * @author Michawiki
 */
$messages['dsb'] = array(
	'createredirect' => 'Dalejpósrědnjenje napóraś',
	'createredirect-desc' => 'Pśidawa specialny bok [[Special:CreateRedirect|CreateRedirect]] za lažke napóranje dalejpósrědnjenjow',
	'createredirect-error' => 'Zmólka: Awtenfikacija jo se njeraźiła.',
	'createredirect-instructions' => 'Z pomocu toś togo formulara móžoš dalejpósrědnjenje napóraś abo eksistěrowacy bok pśez dalejpósrědnjenje wuměniś.',
	'createredirect-page-title' => 'Titel boka:',
	'createredirect-redirect-done' => 'Dalejpósrědnjenje wót "$1" do "$2" napórane',
	'createredirect-redirect-to' => 'Dalej pósrědniś do:',
	'createredirect-save' => 'Bok składowaś',
);

/** Greek (Ελληνικά)
 * @author Glavkos
 */
$messages['el'] = array(
	'createredirect' => 'Δημιουργία Ανακατεύθυνσης',
	'createredirect-desc' => 'Προσθέτει μια ειδική σελίδα [[Special:CreateRedirect|CreateRedirect]] για εύκολη δημιουργία ανακατευθύνσεων',
	'createredirect-error' => 'Σφάλμα: Ο έλεγχος ταυτοποίησης απέτυχε',
	'createredirect-instructions' => 'Χρησιμοποιώντας την παρακάτω φόρμα, μπορείτε να δημιουργήσετε μια σελίδα ανακατεύθυνσης ή να αντικαταστήσετε μια υπάρχουσα σελίδα με μια ανακατεύθυνση.',
	'createredirect-page-title' => 'Τίτλος σελίδας:',
	'createredirect-redirect-done' => 'Redirect δημιουργήθηκε από το "$1" σε "$2"',
	'createredirect-redirect-to' => 'Ανακατεύθυνση στο:',
	'createredirect-save' => 'Αποθήκευση σελίδας',
);

/** Esperanto (Esperanto)
 * @author Yekrats
 */
$messages['eo'] = array(
	'createredirect-save' => 'Konservi paĝon',
);

/** Spanish (español)
 * @author Sanbec
 */
$messages['es'] = array(
	'createredirect' => 'Crear una redirección',
	'createredirect-desc' => 'Añade una [[Special:CreateRedirect|página especial]] para crear redirecciones de una manera sencilla',
	'createredirect-error' => 'Error : Fallo de la identificación.',
	'createredirect-instructions' => 'Empleando el formulario de abajo, puede crear una página de redirección o sustituir una página existente por una redirección.',
	'createredirect-page-title' => 'Título de la página:',
	'createredirect-redirect-done' => 'Redirección creada de «$1» hacia «$2»',
	'createredirect-redirect-to' => 'Redirigir a:',
	'createredirect-save' => 'Guardar la página',
);

/** Estonian (eesti)
 * @author Avjoska
 */
$messages['et'] = array(
	'createredirect' => 'Loo ümbersuunamine',
	'createredirect-page-title' => 'Lehekülje pealkiri:',
	'createredirect-save' => 'Salvesta lehekülg',
);

/** Persian (فارسی)
 * @author Mjbmr
 * @author ZxxZxxZ
 */
$messages['fa'] = array(
	'createredirect' => 'ایجاد تغییرمسیر',
	'createredirect-desc' => 'صفحهٔ ویژهٔ [[Special:CreateRedirect|CreateRedirect]] را برای ایجاد آسان تغییرمسیر می‌افزاید',
	'createredirect-error' => 'خطا: تأیید اعتبار انجام نشد.',
	'createredirect-instructions' => 'با استفاده از فرم زیر می‌توانید صفحه‌ای تغییرمسیر ایجاد کنید یا صفحه‌ای موجود را تبدیل به تغییرمسیر کنید.',
	'createredirect-page-title' => 'عنوان صفحه:',
	'createredirect-redirect-done' => 'تغییرمسیر از «$1» به «$2» ایجاد شد.',
	'createredirect-redirect-to' => 'تغییرمسیر به:',
	'createredirect-save' => 'صفحه ذخیره شود',
);

/** Finnish (suomi)
 * @author Crt
 * @author Nike
 * @author Veikk0.ma
 */
$messages['fi'] = array(
	'createredirect' => 'Luo ohjaus',
	'createredirect-desc' => 'Lisää [[Special:CreateRedirect|toimintosivun]], jolla voi helposti luoda ohjauksia.',
	'createredirect-error' => 'Virhe: Varmennus epäonnistui.',
	'createredirect-instructions' => 'Alla olevan lomakkeen avulla voit luoda ohjaussivun tai korvata olemassa olevan sivun ohjaussivulla.',
	'createredirect-page-title' => 'Sivun nimi',
	'createredirect-redirect-done' => 'Ohjaus luotu sivulta ”$1” sivulle ”$2”.',
	'createredirect-redirect-to' => 'Ohjaa sivulle',
	'createredirect-save' => 'Tallenna sivu',
);

/** Faroese (føroyskt)
 * @author EileenSanda
 */
$messages['fo'] = array(
	'createredirect' => 'Upprætta snarveg',
	'createredirect-desc' => 'Leggur afturat serstaka síðu [[Special:CreateRedirect|CreateRedirect]] fyri á lættan hátt at upprætta snarvegir (umstillingar).',
	'createredirect-page-title' => 'Síðuheiti:',
	'createredirect-redirect-done' => 'Snarvegur upprættaður frá "$1" til "$2"',
	'createredirect-redirect-to' => 'Snarvegur til:',
	'createredirect-save' => 'Goym síðu',
);

/** French (français)
 * @author McDutchie
 * @author Peter17
 */
$messages['fr'] = array(
	'createredirect' => 'Créer une redirection',
	'createredirect-desc' => 'Ajoute une page spéciale [[Special:CreateRedirect|Créer une redirection]] pour créer facilement des redirections',
	'createredirect-error' => 'Erreur : Échec de l’identification.',
	'createredirect-instructions' => 'En utilisant le formulaire ci-dessous, vous pouvez créer une page de redirection ou remplacer une page existante par une redirection.',
	'createredirect-page-title' => 'Titre de la page :',
	'createredirect-redirect-done' => 'Redirection créée de « $1 » vers « $2 »',
	'createredirect-redirect-to' => 'Rediriger vers :',
	'createredirect-save' => 'Enregistrer la page',
);

/** Franco-Provençal (arpetan)
 * @author ChrisPtDe
 */
$messages['frp'] = array(
	'createredirect' => 'Fâre una redirèccion',
	'createredirect-error' => 'Èrror : falyita de l’ôtenticacion.',
	'createredirect-page-title' => 'Titro de la pâge :',
	'createredirect-redirect-done' => 'Redirèccion fêta de « $1 » vers « $2 »',
	'createredirect-redirect-to' => 'Redirigiér vers :',
	'createredirect-save' => 'Encartar la pâge',
);

/** Galician (galego)
 * @author Toliño
 */
$messages['gl'] = array(
	'createredirect' => 'Crear unha redirección',
	'createredirect-desc' => 'Engade unha [[Special:CreateRedirect|páxina especial]] para crear redireccións dun xeito sinxelo',
	'createredirect-error' => 'Erro: Fallou a autenticación.',
	'createredirect-instructions' => 'Empregando o formulario de embaixo, pode crear unha páxina de redirección ou substituír unha páxina existente por unha redirección.',
	'createredirect-page-title' => 'Título da páxina:',
	'createredirect-redirect-done' => 'Redirección creada de "$1" cara a "$2"',
	'createredirect-redirect-to' => 'Redirixir cara a:',
	'createredirect-save' => 'Gardar a páxina',
);

/** Swiss German (Alemannisch)
 * @author Als-Holder
 */
$messages['gsw'] = array(
	'createredirect' => 'Wyterleitig aalege',
	'createredirect-desc' => '[[Special:CreateRedirect|Spezialsyte]] zum eifachen Aalege vu Wyterleitige',
	'createredirect-error' => 'Fähler: Authentifizieriig fählgschlaa.',
	'createredirect-instructions' => 'Mit däm Formular chasch e Wyterleitig aalege oder e Syte, wu s git, dur e Wyterleitig ersetze.',
	'createredirect-page-title' => 'Sytetitel:',
	'createredirect-redirect-done' => 'Wyterleitig vu „$1“ uf „$2“ aagleit',
	'createredirect-redirect-to' => 'Wyterleite uf:',
	'createredirect-save' => 'Syte spychere',
);

/** Hebrew (עברית)
 * @author YaronSh
 */
$messages['he'] = array(
	'createredirect' => 'יצירת הפנייה',
	'createredirect-desc' => 'הוספת דף מיוחד [[Special:CreateRedirect|CreateRedirect]] ליצירת הפניות בפשטות',
	'createredirect-error' => 'שגיאה: האימות נכשל.',
	'createredirect-instructions' => 'באמצעות הטופס שלהלן, באפשרות ליצור דף הפניה או להחליף דף קיים בהפניה.',
	'createredirect-page-title' => 'שם הדף:',
	'createredirect-redirect-done' => 'נוצרה הפנייה מהדף "$1" אל "$2"',
	'createredirect-redirect-to' => 'הפנייה אל:',
	'createredirect-save' => 'שמירת הדף',
);

/** Hindi (हिन्दी)
 * @author Ansumang
 */
$messages['hi'] = array(
	'createredirect' => 'पुनर्निर्देशन बनाएँ',
	'createredirect-page-title' => 'पृष्ठ शीर्षक:',
	'createredirect-save' => 'पृष्ठ सहेजें',
);

/** Upper Sorbian (hornjoserbsce)
 * @author Michawiki
 */
$messages['hsb'] = array(
	'createredirect' => 'Dalesposrědkowanje wutworić',
	'createredirect-desc' => 'Přidawa specialnu stronu [[Special:CreateRedirect|Dalesposrědkowanja wutworić]] za lóše wutworjenje dalesposrědkowanjow',
	'createredirect-error' => 'Zmylk: Awtentifikacija je so njeporadźiła',
	'createredirect-instructions' => 'Z pomocu slědowaceho formulara móžeš dalesposrědkowanje wutworić abo eksistowacu stronu přez dalesposrědkowanje narunać',
	'createredirect-page-title' => 'Titul strony:',
	'createredirect-redirect-done' => 'Dalesposrědkowanje wot "$1" do "$2" wutworjene',
	'createredirect-redirect-to' => 'Dale sposrědkować do:',
	'createredirect-save' => 'Stronu składować',
);

/** Hungarian (magyar)
 * @author Dj
 */
$messages['hu'] = array(
	'createredirect' => 'Átirányítás létrehozásra',
	'createredirect-desc' => 'Hozzáadja a [[Special:CreateRedirect|CreateRedirect]] speciális lapot, mellyel könnyen lehet átirányítást létrehozni.',
	'createredirect-error' => 'Hiba: hitelesítés sikertelen',
	'createredirect-instructions' => 'Az alábbi űrlapot használva létrehozhatsz átirányítást vagy lecserélhetsz egy lapot átirányításra.',
	'createredirect-page-title' => 'Lap címe:',
	'createredirect-redirect-done' => 'Átirányítás létrehozva erről: "$1" erre: "$2"',
	'createredirect-redirect-to' => 'Átirányítás ide:',
	'createredirect-save' => 'Lap mentése',
);

/** Interlingua (interlingua)
 * @author McDutchie
 */
$messages['ia'] = array(
	'createredirect' => 'Crear redirection',
	'createredirect-desc' => 'Adde un pagina special [[Special:CreateRedirect|CreateRedirect]] pro facilemente crear redirectiones',
	'createredirect-error' => 'Error: Authentication fallite.',
	'createredirect-instructions' => 'Con le formulario hic infra, tu pote crear un pagina de redirection o reimplaciar un pagina existente per un redirection.',
	'createredirect-page-title' => 'Titulo del pagina:',
	'createredirect-redirect-done' => 'Redirection create ab "$1" verso "$2"',
	'createredirect-redirect-to' => 'Rediriger verso:',
	'createredirect-save' => 'Publicar pagina',
);

/** Indonesian (Bahasa Indonesia)
 * @author IvanLanin
 */
$messages['id'] = array(
	'createredirect' => 'Pembuatan Pengalihan',
	'createredirect-desc' => 'Menambahkan halaman istimewa [[Special:CreateRedirect|Pembuat Pengalihan]] untuk dengan mudah membuat pengalihan',
	'createredirect-error' => 'Kesalahan: Autentikasi gagal.',
	'createredirect-instructions' => 'Dengan menggunakan formulir di bawah ini, Anda dapat membuat halaman pengalihan atau mengganti halaman yang sudah ada dengan suatu pengalihan.',
	'createredirect-page-title' => 'Judul halaman:',
	'createredirect-redirect-done' => 'Pengalihan dibuat dari "$1" ke "$2"',
	'createredirect-redirect-to' => 'Pengalihan ke:',
	'createredirect-save' => 'Simpan halaman',
);

/** Italian (italiano)
 * @author Beta16
 */
$messages['it'] = array(
	'createredirect' => 'Crea redirect',
	'createredirect-desc' => 'Aggiunge la pagina speciale [[Special:CreateRedirect|CreateRedirect]] per creare facilmente redirect',
	'createredirect-error' => 'Errore: autenticazione fallita.',
	'createredirect-instructions' => 'Utilizzando questo modulo, puoi creare una pagina di reindirizzamento o sostituire una pagina esistente con un rimando.',
	'createredirect-page-title' => 'Titolo della pagina:',
	'createredirect-redirect-done' => 'Rimando creato da "$1" a "$2"',
	'createredirect-redirect-to' => 'Reindirizza a:',
	'createredirect-save' => 'Salva la pagina',
);

/** Japanese (日本語)
 * @author Shirayuki
 * @author 青子守歌
 */
$messages['ja'] = array(
	'createredirect' => '転送を作成',
	'createredirect-desc' => '転送を簡単に作成する[[Special:CreateRedirect|転送作成]]特別ページを追加する',
	'createredirect-error' => 'エラー: 認証に失敗しました。',
	'createredirect-instructions' => '下記のフォームを使用して、新しく転送ページを作成したり、既存のページを転送に置き換えることができます。',
	'createredirect-page-title' => 'ページ名:',
	'createredirect-redirect-done' => '「$1」から「$2」への転送が作成されました',
	'createredirect-redirect-to' => '転送先:',
	'createredirect-save' => 'ページを保存',
);

/** Georgian (ქართული)
 * @author David1010
 */
$messages['ka'] = array(
	'createredirect' => 'გადამისამართების შექმნა',
	'createredirect-page-title' => 'გვერდის სათაური:',
	'createredirect-redirect-to' => 'გადამისამართება:',
	'createredirect-save' => 'გვერდის შენახვა',
);

/** Khmer (ភាសាខ្មែរ)
 * @author គីមស៊្រុន
 */
$messages['km'] = array(
	'createredirect' => 'បង្កើតការបញ្ជូនបន្ត',
	'createredirect-desc' => 'បន្ថែមទំព័រពិសេស[[Special:CreateRedirect|បង្កើតការបញ្ជូនបន្ត]] ដើម្បីបង្កើតការបញ្ជូនបន្តយ៉ាងងាយស្រួល',
	'createredirect-instructions' => 'ដោយប្រើប្រាស់សំនុំបែបបទខាងក្រោម អ្នកអាចបង្កើតទំព័របញ្ជួនបន្តមួយ ឬជំនួសទំព័រដែលមានហើយជាមួយតំណភ្ជាប់បញ្ជួនបន្តមួយ។',
	'createredirect-page-title' => 'ចំណងជើង​ទំព័រ៖',
	'createredirect-redirect-done' => 'បានបញ្ជូនបន្តពី "$1" ទៅ "$2"',
	'createredirect-redirect-to' => 'ការបញ្ជូនបន្តទៅ៖',
	'createredirect-save' => 'រក្សាទុកទំព័រ',
);

/** Korean (한국어)
 * @author 아라
 */
$messages['ko'] = array(
	'createredirect' => '넘겨주기 만들기',
	'createredirect-desc' => '넘겨주기를 쉽게 만드는 [[Special:CreateRedirect|넘겨주기만들기]] 특수 문서 추가',
	'createredirect-error' => '오류: 인증을 실패했습니다.',
	'createredirect-instructions' => '아래의 양식을 사용하여 넘겨주기 문서를 만들거나 넘겨주기로 된 기존 문서를 바꿀 수 있습니다.',
	'createredirect-page-title' => '문서 제목:',
	'createredirect-redirect-done' => '넘겨주기를 "$1"에서 "$2"로 만듦',
	'createredirect-redirect-to' => '넘겨주기 대상:',
	'createredirect-save' => '문서 저장하기',
);

/** Colognian (Ripoarisch)
 * @author Purodha
 */
$messages['ksh'] = array(
	'createredirect' => 'Ömleidungssigg aanlääje',
	'createredirect-desc' => 'Deiht en [[Special:CreateRedirect|Extrasigg]] en et Wiki, öm eifach Ömeidungssige aanlääje ze künne.',
	'createredirect-error' => 'Fähler: De Beräschtejungspröövung es donevve jejange.',
	'createredirect-instructions' => 'Met dämm Fommulaa kam_mer en Ömleidungssigg aanlääje udder en Sigg en en Ömleidongssigg verwandele.',
	'createredirect-page-title' => 'Siggetittel:',
	'createredirect-redirect-done' => 'Ömleidung vun "$1" op "$2" aanjelaat',
	'createredirect-redirect-to' => 'Ömleide op:',
	'createredirect-save' => 'De Sigg Avspeichere',
);

/** Kurdish (Latin script) (Kurdî (latînî)‎)
 * @author George Animal
 */
$messages['ku-latn'] = array(
	'createredirect-page-title' => 'Sernavê rûpelê:',
	'createredirect-save' => 'Rûpelê tomar bike',
);

/** Luxembourgish (Lëtzebuergesch)
 * @author McDutchie
 * @author Robby
 * @author Soued031
 */
$messages['lb'] = array(
	'createredirect' => 'Viruleedung uleeën',
	'createredirect-desc' => 'Setzt eng Spezialsäit [[Special:CreateRedirect|Viruleedung uleeën]] dobäi fir Viruleedungen einfach ze maachen',
	'createredirect-error' => 'Feeler: Authentifikatioun huet net geklappt.',
	'createredirect-instructions' => 'Mat dësem Formulaire kënnt Dir eng Viruleedungssäit uleeën oder eng Säit déi et gëtt duerch en Viruleedung ersetzen.',
	'createredirect-page-title' => 'Titel vun der Säit:',
	'createredirect-redirect-done' => 'Viruleedung vun "$1" op "$2" ugeluecht',
	'createredirect-redirect-to' => 'Viruleeden op:',
	'createredirect-save' => 'Säit späicheren',
);

/** Lithuanian (lietuvių)
 * @author Eitvys200
 */
$messages['lt'] = array(
	'createredirect' => 'Kurti Nukreipimą',
	'createredirect-page-title' => 'Puslapio antraštė:',
	'createredirect-redirect-to' => 'Nukreipti į:',
	'createredirect-save' => 'Išsaugoti puslapį',
);

/** Mizo (Mizo ţawng)
 * @author RMizo
 */
$messages['lus'] = array(
	'createredirect' => 'Hruailuhna siamna',
	'createredirect-desc' => 'Hruailuhna awlsam taka siamna phêk vohbîk [[Special:CreateRedirect|hruailuhna siamna]] belhna a ni.',
	'createredirect-error' => 'Dikhlel: Insawiluhna tlawlh',
	'createredirect-page-title' => 'Phêk hming:',
	'createredirect-redirect-done' => '"$1" aṭanga "$2"-a hruailuhna siam a ni.',
	'createredirect-redirect-to' => 'Hruailuhna tùr phêk:',
	'createredirect-save' => 'Phêk dahṭhatna',
);

/** Basa Banyumasan (Basa Banyumasan)
 * @author StefanusRA
 */
$messages['map-bms'] = array(
	'createredirect' => 'Gawe pengalihan',
	'createredirect-desc' => 'Tambahna kaca astamiwa [[Special:CreateRedirect|Gawe Pengalihan]] ben nggampangna nék arep gawe kaca pengalihan',
	'createredirect-error' => 'Luput: Autentikasi gagal.',
	'createredirect-instructions' => 'Ngunakna formulir nang ngisor kiye, Rika teyeng gawe kaca pengalihan utawa nindih kaca sing wis ana karo sawijining pengalihan.',
	'createredirect-page-title' => 'Judul kaca:',
	'createredirect-redirect-done' => 'Pengalihan wis digawe sekang "$1" meng "$2"',
	'createredirect-redirect-to' => 'Pengalihan meng:',
	'createredirect-save' => 'Simpen kaca',
);

/** Macedonian (македонски)
 * @author Bjankuloski06
 * @author McDutchie
 */
$messages['mk'] = array(
	'createredirect' => 'Направи пренасочување',
	'createredirect-desc' => 'Додава специјална страница [[Special:CreateRedirect|НаправиПренасочување]] за лесно правње на пренасочувања',
	'createredirect-error' => 'Грешка: Заверката не успеа.',
	'createredirect-instructions' => 'Со образецов можете да создавате страници за пренасочување или да замените постоечка страница со пренасочување.',
	'createredirect-page-title' => 'Наслов на страницата:',
	'createredirect-redirect-done' => 'Пренасочувањето од „$1“ кон „$2“ е создадено',
	'createredirect-redirect-to' => 'Пренасочи кон:',
	'createredirect-save' => 'Зачувај',
);

/** Malayalam (മലയാളം)
 * @author Junaidpv
 */
$messages['ml'] = array(
	'createredirect' => 'തിരിച്ചുവിടൽ സൃഷ്ടിക്കുക',
	'createredirect-page-title' => 'താളിന്റെ തലക്കെട്ട്:',
);

/** Malay (Bahasa Melayu)
 * @author Anakmalaysia
 * @author Pizza1016
 */
$messages['ms'] = array(
	'createredirect' => 'Cipta lencongan',
	'createredirect-desc' => 'Menambahkan halaman khas [[Special:CreateRedirect|CreateRedirect]] untuk membuat lencongan dengan mudah',
	'createredirect-error' => 'Ralat: Penentusahan gagal.',
	'createredirect-instructions' => 'Dengan borang di bawah, anda boleh membuat halaman lencongan atau mengganti halaman yang sedia ada dengan lencongan.',
	'createredirect-page-title' => 'Tajuk laman:',
	'createredirect-redirect-done' => 'Lencongan dibuat dari "$1" ke "$2"',
	'createredirect-redirect-to' => 'Lencongkan ke:',
	'createredirect-save' => 'Simpan laman',
);

/** Maltese (Malti)
 * @author Chrisportelli
 */
$messages['mt'] = array(
	'createredirect' => 'Oħloq ir-rindirizz',
	'createredirect-desc' => 'Iżżid paġna speċjali [[Special:CreateRedirect|CreateRedirect]] sabiex faċilment toħloq rindirizz',
	'createredirect-error' => 'Żball: L-awtentikazzjoni falliet.',
	'createredirect-instructions' => "Billi tuża l-formola t'hawn taħt, inti tista' toħloq paġna ta' rindirizz jew tissostitwixxi paġna eżistenti b'rindirizz.",
	'createredirect-page-title' => 'Titlu tal-paġna:',
	'createredirect-redirect-done' => 'Rindirizz maħluq minn "$1" għal "$2"',
	'createredirect-redirect-to' => 'Rindirizz lejn:',
	'createredirect-save' => 'Salva l-paġna',
);

/** Erzya (эрзянь)
 * @author Botuzhaleny-sodamo
 */
$messages['myv'] = array(
	'createredirect-page-title' => 'Лопанть коняксозо:',
	'createredirect-save' => 'Ванстомс лопанть',
);

/** Mazanderani (مازِرونی)
 * @author Mehdi
 */
$messages['mzn'] = array(
	'createredirect-redirect-done' => 'از «$1» به «$2» مسیرتغییر ایجاد بیه.',
);

/** Norwegian Bokmål (norsk bokmål)
 * @author Nghtwlkr
 */
$messages['nb'] = array(
	'createredirect' => 'Opprett omdirigering',
	'createredirect-desc' => 'Legger til spesialsiden [[Special:CreateRedirect|CreateRedirect]] for å enkelt opprette omdirigeringer',
	'createredirect-error' => 'Feil: Autentisering mislyktes.',
	'createredirect-instructions' => 'Ved å brukes skjemaet nedenfor kan du opprette en omdirigeringsside eller erstatte en eksisterende side med en omdirigering.',
	'createredirect-page-title' => 'Sidetittel:',
	'createredirect-redirect-done' => 'Omdirigering opprettet fra «$1» til «$2»',
	'createredirect-redirect-to' => 'Omdiriger til:',
	'createredirect-save' => 'Lagre siden',
);

/** Low German (Plattdüütsch)
 * @author Joachim Mos
 */
$messages['nds'] = array(
	'createredirect-save' => 'Siet spiekern',
);

/** Nepali (नेपाली)
 * @author Bhawani Gautam
 * @author Bhawani Gautam Rhk
 */
$messages['ne'] = array(
	'createredirect' => 'अनुप्रेषण सृजना गर्ने',
	'createredirect-error' => 'त्रुटि:सत्यापन असफल',
	'createredirect-instructions' => 'तलको फारम प्रयोग गरेर तपाईंले अनुप्रेषण पृष्ठ तयार गर्न सक्नुहुन्छ अथवा वर्तमान पृष्ठको स्थान राख्न सक्नुहुन्छ।',
	'createredirect-page-title' => 'पृष्ठ शीर्षक:',
	'createredirect-redirect-done' => ' "$1" बाट  "$2" तर्फ अनुप्रेषित गरियो',
	'createredirect-redirect-to' => 'अनुप्रेषण गर्ने नाम:',
	'createredirect-save' => 'पृष्ठ संग्रह गर्ने',
);

/** Dutch (Nederlands)
 * @author Siebrand
 */
$messages['nl'] = array(
	'createredirect' => 'Doorverwijzing aanmaken',
	'createredirect-desc' => 'Voegt een [[Special:CreateRedirect|speciale pagina]] toe om eenvoudig doorverwijzingen aan te maken',
	'createredirect-error' => 'Fout: authenticatie mislukt.',
	'createredirect-instructions' => 'Via het onderstaande formulier kunt u een doorverwijzingspagina aanmaken of een bestaande pagina vervangen door een doorverwijzing.',
	'createredirect-page-title' => 'Paginanaam:',
	'createredirect-redirect-done' => 'Doorverwijzing aangemaakt van "$1" naar "$2"',
	'createredirect-redirect-to' => 'Doorverwijzen naar:',
	'createredirect-save' => 'Pagina opslaan',
);

/** Nederlands (informeel)‎ (Nederlands (informeel)‎)
 * @author Siebrand
 */
$messages['nl-informal'] = array(
	'createredirect-instructions' => 'Via het onderstaande formulier kan je een doorverwijzingspagina aanmaken of een bestaande pagina vervangen door een doorverwijzing.',
);

/** Norwegian Nynorsk (norsk nynorsk)
 * @author Ranveig
 */
$messages['nn'] = array(
	'createredirect-instructions' => 'Ved å bruke skjemaet under kan du opprette ei omdirigeringsside eller erstatte ei side som finst me ei omdirigering.',
);

/** Occitan (occitan)
 * @author Cedric31
 */
$messages['oc'] = array(
	'createredirect' => 'Crear una redireccion',
	'createredirect-desc' => 'Apond una pagina especiala [[Special:CreateRedirect|Crear una redireccion]] per crear aisidament de redireccions',
	'createredirect-error' => 'Error : Fracàs de l’identificacion.',
	'createredirect-instructions' => 'En utilizant lo formulari çaijós, podètz crear una pagina de redireccion o remplaçar una pagina existenta per una redireccion.',
	'createredirect-page-title' => 'Títol de la pagina :',
	'createredirect-redirect-done' => 'Redireccion creada de « $1 » cap a « $2 »',
	'createredirect-redirect-to' => 'Redirigir cap a :',
	'createredirect-save' => 'Enregistrar la pagina',
);

/** Oriya (ଓଡ଼ିଆ)
 * @author Psubhashish
 */
$messages['or'] = array(
	'createredirect' => 'ଫେରନ୍ତା ପୃଷ୍ଠା ତିଆରିବେ',
	'createredirect-desc' => 'ସହଜରେ ଫେରନ୍ତା ପୃଷ୍ଠାମାନ ତିଆରି କରିବା ପାଇଁ ବିଶେଷ ପୃଷ୍ଠା [[Special:CreateRedirect|CreateRedirect]] ତିଆରି କରିଥାଏ',
	'createredirect-error' => 'ଭୁଲ: ପ୍ରମାଣ କରିବା ବିଫଳ ହେଲା',
	'createredirect-instructions' => 'ଏହି ତଳ ଫର୍ମଟି ବ୍ୟବହାର କରି ଆପଣ ଏକ ପୃଷ୍ଠାର ପୁନପ୍ରେରଣ ପୃଷ୍ଠା ତିଆରି କରି ପାରିବେ କିମ୍ବା ଏକ ପୃଷ୍ଠାକୁ ହଟାଇ ତାହାକୁ ଅନ୍ୟ ଏକ ପୃଷ୍ଠାକୁ ବାହୁଡ଼ାଇ ପାରିବେ ।',
	'createredirect-page-title' => 'ପୃଷ୍ଠା ଶିରୋନାମା:',
	'createredirect-redirect-done' => '"$1" ରୁ "$2"କୁ ଲେଉଟାଇ ଦିଆଗଲା',
	'createredirect-redirect-to' => 'ଲେଉଟାଇବା ପୃଷ୍ଠାର ନାମ:',
	'createredirect-save' => 'ପୃଷ୍ଠାଟି ସାଇତିବେ',
);

/** Polish (polski)
 * @author Sp5uhe
 */
$messages['pl'] = array(
	'createredirect' => 'Tworzenie przekierowania',
	'createredirect-desc' => 'Dodaje stronę specjalną [[Special:CreateRedirect|tworzenia przekierowania]] ułatwiającą tę czynność',
	'createredirect-error' => 'Błąd – nie powiodło się uwierzytelnienie.',
	'createredirect-instructions' => 'Korzystając z poniższego formularza, można utworzyć stronę przekierowującą lub zastąpić istniejącą stronę przekierowaniem.',
	'createredirect-page-title' => 'Tytuł strony',
	'createredirect-redirect-done' => 'Utworzono przekierowanie ze strony „$1” do „$2”',
	'createredirect-redirect-to' => 'Przekierowanie do',
	'createredirect-save' => 'Zapisz stronę',
);

/** Piedmontese (Piemontèis)
 * @author Borichèt
 * @author Dragonòt
 */
$messages['pms'] = array(
	'createredirect' => 'Creé na ridiression',
	'createredirect-desc' => 'A gionta na pàgina special [[Special:CreateRedirect|CreateRedirect]] për creé facilment dle ridiression',
	'createredirect-error' => 'Eror: Autenticassion falìa.',
	'createredirect-instructions' => 'An dovrand ël formolari sì-sota, a peul creé na pàgina ëd ridiression e rimpiassé na pàgina esistenta con na ridiression.',
	'createredirect-page-title' => 'Tìtol ëd la pàgina:',
	'createredirect-redirect-done' => 'Ridiression creà da "$1" a "$2"',
	'createredirect-redirect-to' => 'Ridiression a:',
	'createredirect-save' => 'Salvé la pàgina',
);

/** Pashto (پښتو)
 * @author Ahmed-Najib-Biabani-Ibrahimkhel
 */
$messages['ps'] = array(
	'createredirect-page-title' => 'مخ سرليک:',
	'createredirect-save' => 'مخ خوندي کول',
);

/** Portuguese (português)
 * @author Hamilton Abreu
 * @author Luckas
 */
$messages['pt'] = array(
	'createredirect' => 'Criar redirecionamento',
	'createredirect-desc' => 'Acrescenta uma página especial [[Special:CreateRedirect|Criar redirecionamento]] para criar redirecionamentos de forma simples',
	'createredirect-error' => 'Erro: Falha na autenticação.',
	'createredirect-instructions' => 'Usando o formulário abaixo pode criar uma página de redirecionamento, ou substituir uma página existente por um redirecionamento.',
	'createredirect-page-title' => 'Título da página:',
	'createredirect-redirect-done' => 'Redirecionamento criado de "$1" para "$2"',
	'createredirect-redirect-to' => 'Redirecionar para:',
	'createredirect-save' => 'Gravar página',
);

/** Brazilian Portuguese (português do Brasil)
 * @author Giro720
 */
$messages['pt-br'] = array(
	'createredirect' => 'Criar Redirecionamento',
	'createredirect-desc' => 'Adiciona a página especial [[Special:CreateRedirect|Criar redirecionamento]] para criar redirecionamentos de forma simples',
	'createredirect-error' => 'Erro: Falha na autenticação.',
	'createredirect-instructions' => 'Usando o formulário abaixo pode criar uma página de redirecionamento, ou substituir uma página existente por um redirecionamento.',
	'createredirect-page-title' => 'Título da página:',
	'createredirect-redirect-done' => 'Redirecionamento criado de "$1" para "$2"',
	'createredirect-redirect-to' => 'Redirecionar para:',
	'createredirect-save' => 'Salvar página',
);

/** Romanian (română)
 * @author Firilacroco
 * @author Minisarm
 */
$messages['ro'] = array(
	'createredirect' => 'Creează o redirecționare',
	'createredirect-error' => 'Eroare: Autentificarea a eșuat.',
	'createredirect-page-title' => 'Titul paginii:',
	'createredirect-redirect-done' => 'Redirecționare creată de la „$1” înspre „$2”',
	'createredirect-redirect-to' => 'Redirecționare către:',
	'createredirect-save' => 'Salvează pagina',
);

/** tarandíne (tarandíne)
 * @author Joetaras
 */
$messages['roa-tara'] = array(
	'createredirect' => "ccreje 'nu redirezionamende",
	'createredirect-desc' => "Aggiunge 'na pàgena speciale [[Special:CreateRedirect|Ccreje redirezionamende]] pe ccrejà facile facile le redirezionaminde",
	'createredirect-error' => 'Errore: Autendicazione fallite.',
	'createredirect-instructions' => "Ausanne 'u module aqquà sotte, tu puè ccrejà 'na pàggene de redirezionamende o sostituì 'na pàgene esistende cu 'nu redirezionamende.",
	'createredirect-page-title' => "Titole d'a pàgene:",
	'createredirect-redirect-done' => 'Redirezionamende ccrejate da "$1" a "$2"',
	'createredirect-redirect-to' => 'Redirezione sus a:',
	'createredirect-save' => "Reggistre 'a vôsce",
);

/** Russian (русский)
 * @author MaxSem
 * @author Александр Сигачёв
 */
$messages['ru'] = array(
	'createredirect' => 'Создать перенаправление',
	'createredirect-desc' => 'Добавляет служебную страницу [[Special:CreateRedirect|CreateRedirect]] для легко создания перенаправлений',
	'createredirect-error' => 'Ошибка. Аутентификация не удалась.',
	'createredirect-instructions' => 'Используя приведённую ниже форму, вы можете создать страницу-перенаправление или заменить существующую страницу перенаправления.',
	'createredirect-page-title' => 'Название страницы:',
	'createredirect-redirect-done' => 'Создано перенаправление с «$1» на «$2»',
	'createredirect-redirect-to' => 'Перенаправить на:',
	'createredirect-save' => 'Сохранить страницу',
);

/** Sinhala (සිංහල)
 * @author පසිඳු කාවින්ද
 */
$messages['si'] = array(
	'createredirect' => 'යළියොමුවක් තනන්න',
	'createredirect-error' => 'දෝෂය: සත්‍යාපනය අසාර්ථකයි.',
	'createredirect-page-title' => 'පිටුවේ මාතෘකාව:',
	'createredirect-redirect-done' => 'යළියොමුව "$1" වෙතින් "$2" වෙත තනන ලදී',
	'createredirect-redirect-to' => 'වෙත යළියොමු කරන්න:',
	'createredirect-save' => 'පිටුව සුරකින්න',
);

/** Serbian (Cyrillic script) (српски (ћирилица)‎)
 * @author Rancher
 */
$messages['sr-ec'] = array(
	'createredirect' => 'Направи преусмерење',
	'createredirect-error' => 'Грешка: аутентификација није успела.',
	'createredirect-page-title' => 'Наслов странице:',
	'createredirect-redirect-done' => 'Преусмерење са „$1“ на „$2“',
	'createredirect-redirect-to' => 'Преусмери на:',
	'createredirect-save' => 'Сачувај',
);

/** Swedish (svenska)
 * @author Lokal Profil
 * @author WikiPhoenix
 */
$messages['sv'] = array(
	'createredirect' => 'Skapa omdirigering',
	'createredirect-desc' => 'Lägger till specialsidan [[Special:CreateRedirect|CreateRedirect]] för att enkelt skapa omdirigeringar.',
	'createredirect-error' => 'Fel: Autentisering misslyckades.',
	'createredirect-instructions' => 'Med hjälp av formuläret nedan kan du skapa en omdirigeringssida eller ersätta en befintlig sida med en omdirigering.',
	'createredirect-page-title' => 'Sidtitel:',
	'createredirect-redirect-done' => 'Omdirigering skapad från "$1" till "$2"',
	'createredirect-redirect-to' => 'Omdirigera till:',
	'createredirect-save' => 'Spara sida',
);

/** Tamil (தமிழ்)
 * @author Shanmugamp7
 */
$messages['ta'] = array(
	'createredirect' => 'வழிமாற்றை உருவாக்கவும்',
	'createredirect-desc' => 'எளிதாக வழிமாற்றை உருவாக்க சிறப்புப் பக்கம் [[Special:CreateRedirect|வழிமாற்றுஉருவாக்கு]] சேர்க்கிறது',
	'createredirect-error' => 'பிழை: அங்கீகரித்தல் தோல்வியடைந்தது.',
	'createredirect-instructions' => 'கீழேயுள்ள படிவத்தை பயன்படுத்தி, நீங்கள் ஒரு வழிமாற்று பக்கத்தை உருவாக்கலாம் அல்லது ஏற்கனவே உள்ள பக்கத்ததை வழிமாற்று கொண்டு பிரதியிடலாம்.',
	'createredirect-page-title' => 'பக்கத்தின் தலைப்பு:',
	'createredirect-redirect-done' => '"$1" லிருந்து "$2" க்கு வழிமாற்று உருவாக்கப்பட்டது',
	'createredirect-redirect-to' => 'வழிமாற்றவும்:',
	'createredirect-save' => 'பக்கத்தைச் சேமி',
);

/** Telugu (తెలుగు)
 * @author Chaduvari
 * @author Veeven
 */
$messages['te'] = array(
	'createredirect' => 'దారిమార్పుని సృష్టించండి',
	'createredirect-desc' => 'సులభంగా దారిమార్పులను సృష్టించడానికి వీలుగా [[Special:CreateRedirect|దారిమార్పులను సృష్టించండి]] అనే ప్రత్యేక పుటని చేరుస్తుంది',
	'createredirect-error' => 'లోపం: ఆథెంటికేషను విఫలమైంది.',
	'createredirect-instructions' => 'కింది ఫారమును వాడి, ఓ దారిమార్పు పేజీని సృష్టించవచ్చు లేదా ప్రస్తుతం ఉనికిలో ఉన్న పేజీ స్థానంలో దారిమార్పు పేజీని పెట్టవచ్చు.',
	'createredirect-page-title' => 'పుట శీర్షిక:',
	'createredirect-redirect-done' => '"$1" నుండి "$2"కి దారిమార్పుని సృష్టించాం',
	'createredirect-redirect-to' => 'ఇక్కడికి దారిమార్పు:',
	'createredirect-save' => 'పేజీని భద్రపరచు',
);

/** Tagalog (Tagalog)
 * @author AnakngAraw
 */
$messages['tl'] = array(
	'createredirect' => 'Lumikha ng Pagpapalit ng Pupuntahan',
	'createredirect-desc' => 'Nagdaragdag ng natatanging pahinang [[Special:CreateRedirect|Lumipat ng Pagpapapunta sa Iba]] upang madaling makalikha ng mga pagpapapunta sa ibang mga pahina',
	'createredirect-error' => 'Kamalian: Nabigo ang pagpapatotoo.',
	'createredirect-instructions' => 'Sa pamamagitan ng paggamit ng pormularyong nasa ibaba, makalilikha ka ng isang pahinang nagpapapunta sa iba o palitan ang pahinang umiiral ng isang pinapupunta sa iba.',
	'createredirect-page-title' => 'Pamagat ng pahina:',
	'createredirect-redirect-done' => 'Ang nilipat na pagpapunta ay nilikha mula sa "$1" hanggang sa "$2"',
	'createredirect-redirect-to' => 'Papuntahin sa:',
	'createredirect-save' => 'Sagipin ang pahina',
);

/** Turkish (Türkçe)
 * @author Suelnur
 */
$messages['tr'] = array(
	'createredirect' => 'Yönlendirme oluştur',
	'createredirect-save' => 'Sayfayı kaydet',
);

/** Ukrainian (українська)
 * @author Base
 */
$messages['uk'] = array(
	'createredirect' => 'Створити перенаправлення',
	'createredirect-desc' => 'Додає спеціальну сторінк [[Special:CreateRedirect|CreateRedirect]] для легкого створення перенаправлень',
	'createredirect-error' => 'Помилка: Аутентифікація не вдалась.',
	'createredirect-instructions' => 'Використовуючи форму нижче, Ви можете створити сторіку-перенаправлення або замінити існуючу сторіку перенаправленням.',
	'createredirect-page-title' => 'Назва сторінки:',
	'createredirect-redirect-done' => 'Створено пененаправлення із «$1» на «$2»',
	'createredirect-redirect-to' => 'Перенаправити на:',
	'createredirect-save' => 'Зберегти сторінку',
);

/** Urdu (اردو)
 * @author පසිඳු කාවින්ද
 */
$messages['ur'] = array(
	'createredirect-page-title' => 'صفحہ کا عنوان:',
	'createredirect-save' => 'صفحہ کو محفوظ کریں',
);

/** Yiddish (ייִדיש)
 * @author פוילישער
 */
$messages['yi'] = array(
	'createredirect-save' => 'אױפֿהיטן בלאַט',
);

/** Simplified Chinese (中文（简体）‎)
 * @author Hydra
 */
$messages['zh-hans'] = array(
	'createredirect' => '创建重定向',
	'createredirect-desc' => '添加特殊页 [[Special:CreateRedirect|CreateRedirect]] 可以轻松地创建重定向',
	'createredirect-error' => '错误：身份验证失败。',
	'createredirect-instructions' => '使用下面的表格，可以创建重定向页面或替换现有页面重定向。',
	'createredirect-page-title' => '页标题:',
	'createredirect-redirect-done' => '创建重定向从 "$1" 到 "$2"',
	'createredirect-redirect-to' => '重定向至：',
	'createredirect-save' => '保存网页',
);

/** Traditional Chinese (中文（繁體）‎)
 * @author Simon Shek
 */
$messages['zh-hant'] = array(
	'createredirect' => '創建重定向',
	'createredirect-desc' => '添加特殊頁 [[Special:CreateRedirect|CreateRedirect]] 可以輕鬆地創建重定向',
	'createredirect-error' => '錯誤：身份驗證失敗。',
	'createredirect-instructions' => '使用下面的表格，可以創建重定向頁面或替換現有頁面重定向。',
	'createredirect-page-title' => '頁面標題:',
	'createredirect-redirect-done' => '創建重定向從 "$1" 到 "$2"',
	'createredirect-redirect-to' => '重定向至：',
	'createredirect-save' => '儲存本頁',
);
