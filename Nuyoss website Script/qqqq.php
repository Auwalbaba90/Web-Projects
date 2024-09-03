<?php
	session_start();
	session_destroy();
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="icon" type="image/ico" href="./images/logo.png" />
	<link rel="stylesheet" type="text/css" href="./css/login_signup.css">
	<script type="text/javascript">
			function populate(s1, s2) {
				var s1 = document.getElementById (s1);
				var s2 = document.getElementById (s2);
				s2.innerHTML = "";
				if (s1.value == "Select") {
					var optionArry = ["|Select"];
				}else if (s1.value == "Abuja") {
					var optionArry = ["Abaji|Abaji","Abuja Municipal|Abuja Municipal","Gwagwalada|Gwagwalada","Kuje|Kuje","Bwari|Bwari","Kwali|Kwali"];
				} else if (s1.value == "Abia") {
					var optionArry = ["Aba North|Aba North","Aba South|Aba South","Arochukwu|Arochukwu","Bende Local Government Area|Bende Local Government Area","Ikwuano|Ikwuano","Isiala Ngwa North|Isiala Ngwa North","Isiala Ngwa South|Isiala Ngwa South","Isuikwuato|Isuikwuato","Obi Ngwa Local Government Area|Obi Ngwa Local Government Area","Ohafia Local Government Area|Ohafia Local Government Area","Osisioma Ngwa|Osisioma Ngwa","Ugwunagbo|Ugwunagbo","Ukwa East|Ukwa East","Ukwa West|Ukwa West","Umu-Nneochi Local Government Area|Umu-Nneochi Local Government Area","Umuahia North|Umuahia North","Umuahia South|Umuahia South"];
				} else if (s1.value == "Adamawa") {
					var optionArry = ["Demsa|Demsa","Fufore|Fufore","Ganye|Ganye","Girei|Girei","Gombi|Gombi","Guyuk|Guyuk","Hong|Hong","Jada|Jada","Lamurde|Lamurde","Madagali|Madagali","Maiha|Maiha","Mayo-Belwa|Mayo-Belwa","Michika|Michika","Mubi North|Mubi North","Mubi South|Mubi South","Numan|Numan","Shelleng|Shelleng","Song|Song","Toungo|Toungo","Yola North (State capital)|Yola North (State capital)","Yola South|Yola South"];
				} else if (s1.value == "Akwa Ibom") {
					var optionArry = ["Abak|Abak","Eastern Obolo|Eastern Obolo","Eket|Eket","Esit-Eket|Esit-Eket","Essien Udim|Essien Udim","Etim-Ekpo|Etim-Ekpo","Etinan|Etinan","Ibeno|Ibeno","Ibesikpo-Asutan|Ibesikpo-Asutan","Ibiono-Ibom|Ibiono-Ibom","Ika|Ika","Ikono|Ikono","Ikot Abasi|Ikot Abasi","Ikot Ekpene|Ikot Ekpene","Ini|Ini","Itu|Itu","Mbo|Mbo","Mkpat-Enin|Mkpat-Enin","Nsit-Atai|Nsit-Atai","Nsit-Ibom|Nsit-Ibom","Nsit-Ubium|Nsit-Ubium","Obot-Akara|Obot-Akara","Okobo|Okobo","Onna|Onna","Oron|Oron","Oruk Anam|Oruk Anam","Ukanafun|Ukanafun","Udung-Uko|Udung-Uko","Uruan|Uruan","Urue-Offong/Oruko|Urue-Offong/Oruko","Uyo|Uyo"];
				} else if (s1.value == "Anambra") {
					var optionArry = ["Aguata|Aguata","Awka North|Awka North","Awka South|Awka South","Anambra East|Anambra East","Anambra West|Anambra West","Anaocha|Anaocha","Ayamelum|Ayamelum","Dunukofia|Dunukofia","Ekwusigo|Ekwusigo","Idemili North|Idemili North","Idemili South|Idemili South","Ihiala|Ihiala","Njikoka|Njikoka","Nnewi North|Nnewi North","Nnewi South|Nnewi South","Ogbaru|Ogbaru","Onitsha North|Onitsha North","Onitsha South|Onitsha South","Orumba North|Orumba North","Orumba South|Orumba South","Oyi|Oyi"];
				} else if (s1.value == "Bauchi") {
					var optionArry = ["Bauchi|Bauchi","Tafawa Balewa|Tafawa Balewa","Dass|Dass","Toro|Toro","Bogoro|Bogoro","Ningi|Ningi","Warji|Warji","Ganjuwa|Ganjuwa","Kirfi|Kirfi","Alkaleri|Alkaleri","Darazo|Darazo","Misau|Misau","Giade|Giade","Shira|Shira","Jama’are|Jama’are","Katangum|Katangum","Itas/Gadau|Itas/Gadau","Zaki|Zaki","Gamawa|Gamawa","Damban|Damban"];
				} else if (s1.value == "Bayelsa") {
					var optionArry = ["Brass|Brass","Ekeremor|Ekeremor","Kolokuma/Opokuma|Kolokuma/Opokuma","Nembe|Nembe","Ogbia|Ogbia","Sagbama|Sagbama","Southern Ijaw|Southern Ijaw","Yenagoa|Yenagoa"];
				} else if (s1.value == "Benue") {
					var optionArry = ["Ado|Ado","Agatu|Agatu","Apa|Buruku","Gboko|Gboko","Guma|Guma","Gwer East|Gwer East","Gwer West|Gwer West","Katsina-Ala|Katsina-Ala","Konshisha|Konshisha","Kwande|Kwande","Logo|Logo","Makurdi|Makurdi","Obi|Obi","Ogbadibo|Ogbadibo","Ohimini|Ohimini","Oju|Oju","Okpokwu|Okpokwu","Otukpo|Otukpo","Tarka|Tarka","Ukum|Ukum","Ushongo|Ushongo","Vandeikya|Vandeikya"];
				} else if (s1.value == "Borno") {
					var optionArry = ["Hawul|Hawul","Jere|Jere","Kaga|Kaga","Kala/Balge|Kala/Balge","Konduga|Konduga","Kukawa|Kukawa","Kwaya Kusar|Kwaya Kusar","Mafa|Mafa","Magumeri|Magumeri","Maiduguri|Maiduguri","Marte|Marte","Mobbar|Mobbar","Monguno|Monguno","Ngala|Ngala","Nganzai|Nganzai","Shani|Shani","Abadam|Abadam","Askira/Uba|Askira/Uba","Bama|Bama","Bayo|Bayo","Biu|Biu","Chibok|Chibok","Damboa|Damboa","Dikwa|Dikwa","Gubio|Gubio","Guzamala|Guzamala","Gwoza|Gwoza"];
				} else if (s1.value == "Cross River") {
					var optionArry = ["Abi|Abi","Akamkpa|Akamkpa","Akpabuyo|Akpabuyo","Bakassi|Bakassi","Bekwarra|Bekwarra","Biase|Biase","Boki|Boki","Calabar Municipal|Calabar Municipal","Calabar South|Calabar South","Etung|Etung","Ikom|Ikom","Obanliku|Obanliku","Obubra|Obubra","Obudu|Obudu","Odukpani|Odukpani","Ogoja|Ogoja","Yakuur|Yakuur","Yala|Yala"];
				} else if (s1.value == "Delta") {
					var optionArry = ["Aniocha North|Aniocha North","Aniocha South|Aniocha South","Bomadi|Bomadi","Burutu|Burutu","Ethiope East|Ethiope East","Ethiope West|Ethiope West","Ika North East|Ika North East","Ika South|Ika South","Isoko North|Isoko North","Isoko South|Isoko South","Ndokwa East|Ndokwa East","Ndokwa West|Ndokwa West","Okpe|Okpe","Oshimili North|Oshimili North","Oshimili South|Oshimili South","Sapele|Sapele","Udu|Udu","Ughelli North|Ughelli North","Ughelli South|Ughelli South","Ukwuani|Ukwuani","Uvwie|Uvwie","Patani|Patani","Warri North|Warri North","Warri South|Warri South","Warri South West|Warri South West"];
				} else if (s1.value == "Ebonyi") {
					var optionArry = ["Abakaliki|Abakaliki","Afikpo North|Afikpo North","Afikpo South (Edda)|Afikpo South (Edda)","Ebonyi|Ebonyi","Ezza North|Ezza North","Ezza South|Ezza South","Ikwo|Ikwo","Ishielu|Ishielu","Ivo|Ivo","Izzi|Izzi","Ohaozara|Ohaozara","Ohaukwu|Ohaukwu","Onicha|Onicha"];
				} else if (s1.value == "Edo") {
					var optionArry = ["Akoko-Edo|Akoko-Edo","Egor|Egor","Esan Central|Esan Central","Esan North-East|Esan North-East","Esan South-East|Esan South-East","Esan West|Esan West","Etsako Central|Etsako Central","Etsako East|Etsako East","Etsako West|Etsako West","Igueben|Igueben","Ikpoba-Okha|Ikpoba-Okha","Oredo|Oredo","Orhionmwon|Orhionmwon","Ovia North-East|Ovia North-East","Ovia South-West|Ovia South-West","Owan East|Owan East","Owan West|Owan West","Uhunmwonde|Uhunmwonde"];
				} else if (s1.value == "Ekiti") {
					var optionArry = ["Ado-Ekiti|Ado-Ekiti","Ikere|Ikere","Oye|Oye","Aiyekire (Gbonyin)|Aiyekire (Gbonyin)","Efon|Efon","Ekiti East|Ekiti East","Ekiti South-West|Ekiti South-West","Ekiti West|Ekiti West","Emure|Emure","Ido-Osi|Ido-Osi","Ijero|Ijero","Ikole|Ikole","Ilejemeje|Ilejemeje","Irepodun/Ifelodun|Irepodun/Ifelodun","Ise/Orun|Ise/Orun","Moba|Moba"];
				} else if (s1.value == "Enugu") {
					var optionArry = ["Aninri|Aninri","Awgu|Awgu","Enugu East|Enugu East","Enugu North|Enugu North","Enugu South|Enugu South","Ezeagu|Ezeagu","Igbo Etiti|Igbo Etiti","Igbo Eze North|Igbo Eze North","Igbo Eze South|Igbo Eze South","Isi Uzo|Isi Uzo","Nkanu East|Nkanu East","Nkanu West|Nkanu West","Nsukka|Nsukka","Oji River|Oji River","Udenu|Udenu","Udi|Udi","Uzo-Uwani|Uzo-Uwani"];
				} else if (s1.value == "Gombe") {
					var optionArry = ["Akko|Akko","Balanga|Balanga","Billiri|Billiri","Dukku|Dukku","Funakaye|Funakaye","Gombe|Gombe","Kaltungo|Kaltungo","Kwami|Kwami","Nafada|Nafada","Shongom|Shongom","Yamaltu/Deba|Yamaltu/Deba"];
				} else if (s1.value == "Imo") {
					var optionArry = ["Aboh Mbaise|Aboh Mbaise","Ahiazu Mbaise|Ahiazu Mbaise","Ehime Mbano|Ehime Mbano","Ezinihitte Mbaise|Ezinihitte Mbaise","Ideato North|Ideato North","Ideato South|Ideato South","Ihitte/Uboma|Ihitte/Uboma","Ikeduru|Ikeduru","Isiala Mbano|Isiala Mbano","Isu|Isu","Mbaitoli|Mbaitoli","Ngor Okpala|Ngor Okpala","Njaba|Njaba","Nkwerre|Nkwerre","Nwangele|Nwangele","Obowo|Obowo","Oguta|Oguta","Ohaji/Egbema|Ohaji/Egbema","Okigwe|Okigwe","Onuimo|Onuimo","Orlu|Orlu","Orsu|Orsu","Oru East|Oru East","Oru West|Oru West","Owerri Municipal|Owerri Municipal","Owerri North|Owerri North","Owerri West|Owerri West"];
				} else if (s1.value == "Jigawa") {
					var optionArry = ["Auyo|Auyo","Babura|Babura","Biriniwa|Biriniwa","Birnin Kudu|Birnin Kudu","Buji|Buji","Dutse|Dutse","Gagarawa|Gagarawa","Garki|Garki","Gumel|Gumel","Guri|Guri","Gwaram|Gwaram","Gwiwa|Gwiwa","Hadejia|Hadejia","Jahun|Jahun","Kafin Hausa|Kafin Hausa","Kaugama|Kaugama","Kazaure|Kazaure","Kiri Kasama|Kiri Kasama","Kiyawa|Kiyawa","Maigatari|Maigatari","Malam Madori|Malam Madori","Miga|Miga","Ringim|Ringim","Roni|Roni","Sule Tankarkar|Sule Tankarkar","Taura|Taura","Yankwashi|Yankwashi"];
				} else if (s1.value == "Kaduna") {
					var optionArry = ["Birnin Gwari|Birnin Gwari","Chikun|Chikun","Giwa|Giwa","Igabi|Igabi","Ikara|Ikara","Jaba|Jaba","Jema’a|Jema’a","Kachia|Kachia","Kaduna North|Kaduna North","Kaduna South|Kaduna South","Kagarko|Kagarko","Kajuru|Kajuru","Kaura|Kaura","Kauru|Kauru","Kubau|Kubau","Kudan|Kudan","Lere|Lere","Makarfi|Makarfi","Sabon Gari|Sabon Gari","Sanga|Sanga","Soba|Soba","Zangon Kataf|Zangon Kataf","Zaria|Zaria"];
				} else if (s1.value == "Kano") {
					var optionArry = ["Ajingi|Ajingi","Albasu|Albasu","BagwaiBebeji|BagwaiBebeji","Bichi|Bichi","Bunkure|Bunkure","Dala|Dala","Dambatta|Dambatta","Dawakin Kudu|Dawakin Kudu","Dawakin Tofa|Dawakin Tofa","DoguwaFagge|DoguwaFagge","Gabasawa|Gabasawa","Garko|Garko","Garum Mallam Gaya|Garum Mallam Gaya","Gezawa|Gezawa","Gwale|Gwale","Gwarzo|Gwarzo","Kabo|Kabo","Kano Municipal|Kano Municipal","Karaye|Karaye","Kibiya|Kibiya","Kiru|Kiru","kumbotso|kumbotso","Kunchi|Kunchi","Kura|Kura","Madobi|Madobi","Makoda|Makoda","Minjibir|Minjibir","Nasarawa|Nasarawa","Rano|Rano","Rimin Gado|Rimin Gado","Rogo|Rogo","Shanono|Shanono","Sumaila|Sumaila","Takai|Takai","Tarauni|Tarauni","Tofa|Tofa","Tsanyawa|Tsanyawa","Tudun Wada|Tudun Wada","Ungogo|Ungogo","Warawa|Warawa","Wudil|Wudil"];
				} else if (s1.value == "Katsina") {
					var optionArry = ["Bakori|Bakori","Batagarawa|Batagarawa","Batsari|Batsari","Baure|Baure","Bindawa|Bindawa","Charanchi|Charanchi","Dan Musa|Dan Musa","Dandume|Dandume","Danja|Danja","Daura|Daura","Dutsi|Dutsi","Dutsin-Ma|Dutsin-Ma","Faskari|Faskari","Funtua|Funtua","Ingawa|Ingawa","Jibia|Jibia","Kafur|Kafur","Kaita|Kaita","Kankara|Kankara","Kankia|Kankia","Katsina|Katsina","Kurfi|Kurfi","Kusada|Kusada","Mai’Adua|Mai’Adua","Malumfashi|Malumfashi","Mani|Mani","Mashi|Mashi","Matazu|Matazu","Musawa|Musawa","Rimi|Rimi","Sabuwa|Sabuwa","Safana|Safana","Sandamu|Sandamu","Zango|Zango"];
				} else if (s1.value == "Kebbi") {
					var optionArry = ["Aleiro|Aleiro","Arewa Dandi|Arewa Dandi","Argungu|Argungu","Augie|Augie","Bagudo|Bagudo","Birnin Kebbi|Birnin Kebbi","Bunza|Bunza","Dandi|Dandi","Fakai|Fakai","Gwandu|Gwandu","Jega|Jega","Kalgo|Kalgo","Koko/Besse|Koko/Besse","Maiyama|Maiyama","Ngaski|Ngaski","Sakaba|Sakaba","Shanga|Shanga","Suru|Suru","Danko/Wasagu|Danko/Wasagu","Yauri|Yauri","Zuru|Zuru"];
				} else if (s1.value == "Kogi") {
					var optionArry = ["Adavi|Adavi","Ajaokuta|Ajaokuta","Ankpa|Ankpa","Bassa|Dekina","Ibaji|Ibaji","Idah|Idah","Igalamela-Odolu|Igalamela-Odolu","Ijumu|Ijumu","Kabba/Bunu|Kabba/Bunu","Koton Karfe|Koton Karfe","Lokoja|Lokoja","Mopa-Muro|Mopa-Muro","Ofu|Ofu","Ogori/Magongo|Ogori/Magongo","Okehi|Okehi","Okene|Okene","Olamaboro|Olamaboro","Omala|Omala","Yagba East|Yagba East","Yagba West|Yagba West"];
				} else if (s1.value == "Kwara") {
					var optionArry = ["Asa|Asa","Baruten|Baruten","Edu|Edu","Ekiti|Ekiti","Ifelodun|Ifelodun","Ilorin East|Ilorin East","Ilorin South|Ilorin South","Ilorin West|Ilorin West","Irepodun|Irepodun","Isin|Isin","Kaiama|Kaiama","Moro|Moro","Offa|Offa","Oke Ero|Oke Ero","Oyun|Oyun","Patigi|Patigi"];
				} else if (s1.value == "Lagos") {
					var optionArry = ["Agege|Agege","Alimosho|Alimosho","Apapa|Apapa","Ifako-Ijaye|Ifako-Ijaye","Ikeja|Ikeja","Kosofe|Kosofe","Mushin|Mushin","Oshodi-Isolo|Oshodi-Isolo","Shomolu|Shomolu","Eti-Osa|Eti-Osa","Lagos Island|Lagos Island","Lagos Mainland|Lagos Mainland","Surulere|Surulere","Ojo|Ojo","Ajeromi-Ifelodun|Ajeromi-Ifelodun","Amuwo-Odofin|Amuwo-Odofin","Badagry|Badagry","Ikorodu|Ikorodu","Ibeju-Lekki|Ibeju-Lekki","Epe|Epe"];
				} else if (s1.value == "Nasarawa") {
					var optionArry = ["Akwanga|Akwanga","Awe|Awe","Doma|Doma","Karu|Karu","Keana|Keana","Keffi|Keffi","Kokona|Kokona","Lafia|Lafia","Nasarawa|Nasarawa","Nasarawa Egon|Nasarawa Egon","Obi|Obi","Toto|Toto","Wamba|Wamba"];
				} else if (s1.value == "Niger") {
					var optionArry = ["Agaie|Agaie","Agwara|Agwara","Bida|Bida","Borgu|Borgu","Bosso|Bosso","Chanchaga|Chanchaga","Edati|Edati","Gbako|Gbako","Gurara|Gurara","Katcha|Katcha","Kontagora|Kontagora","Lapai|Lapai","Lavun|Lavun","Magama|Magama","Mariga|Mariga","Mashegu|Mashegu","Mokwa|Mokwa","Munya|Munya","Paikoro|Paikoro","Rafi|Rafi","Rijau|Rijau","Shiroro|Shiroro","Suleja|Suleja","Tafa|Tafa","Wushishi (Garki Garage)|Wushishi (Garki Garage)"];
				} else if (s1.value == "Ogun") {
					var optionArry = ["Abeokuta North|Abeokuta North","Abeokuta South|Abeokuta South","Ado-Odo/Ota|Ado-Odo/Ota","Ewekoro|Ewekoro","Ifo|Ifo","Ijebu East|Ijebu East","Ijebu North|Ijebu North","Ijebu North-East|Ijebu North-East","Ijebu Ode|Ijebu Ode","Ikenne|Ikenne","Imeko Afon|Imeko Afon","Ipokia|Ipokia","Obafemi Owode|Obafemi Owode","Odogbolu|Odogbolu","Odeda|Odeda","Ogun Waterside|Ogun Waterside","Remo North|Remo North","Sagamu|Sagamu","(Shagamu)|(Shagamu)","Yewa North|Yewa North","(formerly Egbado North)|(formerly Egbado North)","Yewa South|Yewa South","(formerly Egbado South)|(formerly Egbado South)"];
				} else if (s1.value == "Ondo") {
					var optionArry = ["Akoko North-East|Akoko North-East","Akoko North-West|Akoko North-West","Akoko South-East|Akoko South-East","Akoko South-West|Akoko South-West","Akure North|Akure North","Akure South|Akure South","Ese Odo|Ese Odo","Idanre|Idanre","Ifedore|Ifedore","Ilaje|Ilaje","Ile Oluji/Okeigbo|Ile Oluji/Okeigbo","Irele|Irele","Odigbo|Odigbo","Okitipupa|Okitipupa","Ondo East|Ondo East","Ondo West|Ondo West","Ose|Ose","Owo|Owo"];
				} else if (s1.value == "Osun") {
					var optionArry = ["Aiyedaade|Aiyedaade","Aiyedire|Aiyedire","Atakunmosa East|Atakunmosa East","Atakunmosa West|Atakunmosa West","Boluwaduro|Boluwaduro","Boripe|Boripe","Ede North|Ede North","Ede South|Ede South","Egbedore|Egbedore","Ejigbo|Ejigbo","Ife Central|Ife Central","Ife East|Ife East","Ife North|Ife North","Ife South|Ife South","Ifedayo|Ifedayo","Ifelodun|Ifelodun","Ila|Ila","Ilesa East|Ilesa East","Ilesa West|Ilesa West","Irepodun|Irepodun","Irewole|Irewole","Isokan|Isokan","Iwo|Iwo","Obokun|Obokun","Odo Otin|Odo Otin","Ola Oluwa|Ola Oluwa","Olorunda|Olorunda","Oriade|Oriade","Orolu|Orolu","Osogbo|Osogbo"];
				} else if (s1.value == "Oyo") {
					var optionArry = ["Akinyele|Akinyele","Afijio|Afijio","Atiba|Atiba","Atisbo|Atisbo","Egbeda|Egbeda","Ibadan North|Ibadan North","Ibadan North-East|Ibadan North-East","Ibadan North-West|Ibadan North-West","Ibadan South-West|Ibadan South-West","Ibadan South-East|Ibadan South-East","Ibarapa Central|Ibarapa Central","Ibarapa East|Ibarapa East","Ibarapa North|Ibarapa North","Ido|Ido","Irepo|Irepo","Iseyin|Iseyin","Itesiwaju|Itesiwaju","Iwajowa|Iwajowa","Kajola|Kajola","Lagelu|Lagelu","Ogbomosho North|Ogbomosho North","Ogbomosho South|Ogbomosho South","Oyo East|Oyo East","Oyo West|Oyo West","Olorunsogo|Olorunsogo","Oluyole|Oluyole","Ogo Oluwa|Ogo Oluwa","Orelope|Orelope","Ori Ire|Ori Ire","Ona Ara|Ona Ara","Saki West|Saki West","Saki East|Saki East","Surulere|Surulere"];
				} else if (s1.value == "Plateau") {
					var optionArry = ["Barkin Ladi|Barkin Ladi","Bassa|Bassa","Bokkos|Bokkos","Jos East|Jos East","Jos North|Jos North","Jos South|Jos South","Kanam|Kanam","Kanke|Kanke","Langtang North|Langtang North","Langtang South|Langtang South","Mangu|Mangu","Mikang|Mikang","Pankshin|Pankshin","Qua’an Pan|Qua’an Pan","Riyom|Riyom","Shendam|Shendam","Wase|Wase"];
				} else if (s1.value == "Rivers") {
					var optionArry = ["Port Harcourt|Port Harcourt","Obio-Akpor|Obio-Akpor","Okrika|Okrika","Ogu–Bolo|Ogu–Bolo","Eleme|Eleme","Tai|Tai","Gokana|Gokana","Khana|Khana","Oyigbo|Oyigbo","Opobo–Nkoro|Opobo–Nkoro","Andoni|Andoni","Bonny|Bonny","Degema|Degema","Asari-Toru|Asari-Toru","Akuku-Toru|Akuku-Toru","Abua–Odual|Abua–Odual","Ahoada West|Ahoada West","Ahoada East|Ahoada East","Ogba–Egbema–Ndoni|Ogba–Egbema–Ndoni","Emohua|Emohua","Ikwerre|Ikwerre","Etche|Etche","Omuma|Omuma"];
				} else if (s1.value == "Sokoto") {
					var optionArry = ["Binji|Binji","Bodinga|Bodinga","Dange Shuni|Dange Shuni","Gada|Gada","Goronyo|Goronyo","Gudu|Gudu","Gwadabawa|Gwadabawa","Illela|Illela","Isa|Isa","Kebbe|Kebbe","Kware|Kware","Rabah|Rabah","Sabon Birni|Sabon Birni","Shagari|Shagari","Silame|Silame","Sokoto North|Sokoto North","Sokoto South|Sokoto South","Tambuwal|Tambuwal","Tangaza|Tangaza","Tureta|Tureta","Wamako|Wamako","Wurno|Wurno","Yabo|Yabo"];
				} else if (s1.value == "Taraba") {
					var optionArry = ["Ardo Kola|Ardo Kola","Bali|Bali","Donga|Donga","Gashaka|Gashaka","Gassol|Gassol","Ibi|Ibi","Jalingo|Jalingo","Karim Lamido|Karim Lamido","Kurmi|Kurmi","Lau|Lau","Sardauna|Sardauna","Takum|Takum","Ussa|Ussa","Wukari|Wukari","Yorro|Yorro","Zing|Zing"];
				} else if (s1.value == "Yobe") {
					var optionArry = ["Bade|Bade","Bursari|Bursari","Damaturu|Damaturu","Geidam|Geidam","Gujba|Gujba","Gulani|Gulani","Fika|Fika","Fune|Fune","Jakusko|Jakusko","Karasuwa|Karasuwa","Machina|Machina","Nangere|Nangere","Nguru|Nguru","Potiskum|Potiskum","Tarmuwa|Tarmuwa","Yunusari|Yunusari","Yusufari|Yusufari"];
				} else if (s1.value == "Zamfara") {
					var optionArry = ["nka|nka","Bakura|Bakura","Birnin Magaji/Kiyaw|Birnin Magaji/Kiyaw","Bukkuyum|Bukkuyum","Bungudu|Bungudu","Tsafe|Tsafe","Gummi|Gummi","Gusau|Gusau","Kaura Namoda|Kaura Namoda","Maradun|Maradun","Maru|Maru","Shinkafi|Shinkafi","Talata Mafara|Talata Mafara","Zurmi|Zurmi"];
				}
				for(var option in optionArry) {
					var pair = optionArry[option].split("|");
					var newoption = document.createElement("option");
					newoption.value = pair[0];
					newoption.innerHTML = pair[1];
					s2.options.add(newoption);
				}
			}
	</script>
</head>
<body>
	<div id="container">
		<?php include('header.php'); ?>
		<form action="login.php" method="POST" id="Login">
		<div class="content">
			<h1 class="Register-login">Login</h1><h1 class="Register-login">Register</h1>
		<div class="row">
			<div class="col-full">
				<div class="login">
				<?php
					if (isset($_POST['Login'])){
						if(isset($_POST['Username'], $_POST['Password'])){
							$Username = htmlspecialchars(htmlentities(stripslashes($_POST['Username'])));
							$Password = htmlspecialchars(htmlentities(stripslashes($_POST['Password'])));
								if (!empty($Username)) {
									if (!empty($Password)){
										include './db_connection/db_connect.php';
											$query="SELECT count(*) FROM users where Email_Address=? and Password=?";
												$stmt=mysqli_prepare($dbc,$query);
												mysqli_stmt_bind_param($stmt,"ss",$Username,$Password);
												mysqli_stmt_execute($stmt);
												mysqli_stmt_bind_result($stmt,$cnt);
												mysqli_stmt_fetch($stmt);
												//echo $cnt;
												mysqli_stmt_close($stmt);
												mysqli_close($dbc);
												/*$affected_rows=mysqli_stmt_affected_rows($stmt);
												$response=@mysqli_query($dbc,$query);
												echo $affected_rows;
												*/
												if($cnt==1)
												{
													$_SESSION['Email_Address']=$Username;
													echo '
													<script type="text/javascript">
														window.location = "./Dashboard/index.php";
													</script>';
												}else{
													echo '<a style="color: red;">Invalid User Name Or Password Check and try Again.</a>';
												}
									}else{
										echo 'Password field Empty!';
									}
								}else{
									echo 'User Name field Empty!';
								}
						}
					}
				?>
					 <div class="input-cnt">
            		<i class="material-icons">Email Add:<span style="color: red">*</span></i>
            		<input type="email" placeholder="E.g: Union@example.com" name="Username" />
         		</div>
         		<div class="input-cnt">
            		<i class="material-icons">Password:<span style="color: red">*</span></i>
           			 <input type="password" placeholder="Password" name="Password" />
        		 	</div>
        		 	 <div class="input-cnt">
           			 <input type="submit" name="Login" value="Login" />
         		</div><br>
         		<span><i><a href="#"><strong>Forgot Password?</strong></a></i></span><br>
         		<span style="color: #FF9999"><i>Don't have and Account Go to Register</i></span>
      		</div>
      </form>
      	<form action="login.php" id="form_sing_Up" method="Post" onsubmit="return validateForm()">
      					<div class="col-two">
							<?php
								if (isset($_POST['Submit'])){
									if(isset($_POST['First_Name'], $_POST['Surname'], $_POST['Other_name'], $_POST['Email_Address'], $_POST['matric_no'], $_POST['Phone_Number'], $_POST['slct1'], $_POST['slct2'], $_POST['Date_of_Birth'], $_POST['gender'], $_POST['Password2']));{

										$First_Name = htmlspecialchars(htmlentities(stripslashes($_POST['First_Name'])));
										$Surname = htmlspecialchars(htmlentities(stripslashes($_POST['Surname'])));
										$Other_name = htmlspecialchars(htmlentities(stripslashes($_POST['Other_name'])));
										$Email_Address = htmlspecialchars(htmlentities(stripslashes($_POST['Email_Address'])));
										$matric_no = htmlspecialchars(htmlentities(stripslashes($_POST['matric_no'])));
										$Phone_Number = htmlspecialchars(htmlentities(stripslashes($_POST['Phone_Number'])));
										$slct1 = htmlspecialchars(htmlentities(stripslashes($_POST['slct1'])));
										$slct2 = htmlspecialchars(htmlentities(stripslashes($_POST['slct2'])));
										$Date_of_Birth = htmlspecialchars(htmlentities(stripslashes($_POST['Date_of_Birth'])));
										$gender = htmlspecialchars(htmlentities(stripslashes($_POST['gender'])));
										$Password2 = htmlspecialchars(htmlentities(stripslashes($_POST['Password2'])));

										$code = rand(1111, 9999);

											if(!empty($First_Name)){

												if(!empty($Surname)){

													if(!empty($Email_Address)){

														if(!empty($matric_no)){

															if(!empty($Phone_Number)){

																if(!empty($slct1)){

																	if(!empty($slct2)){

																		if(!empty($Date_of_Birth)){

																			if(!empty($gender)){

																				if(!empty($Password2)){
																					require_once('./db_connection/db_connect.php');
																						{
																						$query="INSERT INTO users (First_name, Surname, Other_Name, Email_Address, Matric_No, Phone_No, State, Local_govt, Date_of_Birth, Gender, Password, Confirmation_Code) VALUES (?,?,?,?,?,?,?,?,?,?,?,?)";
																							$stmt=mysqli_prepare($dbc,$query);
																							mysqli_stmt_bind_param($stmt,"ssssssssssss",$First_Name,$Surname,$Other_name,$Email_Address,$matric_no,$Phone_Number,$slct1,$slct2,$Date_of_Birth,$gender,$Password2,$code);
																							mysqli_stmt_execute($stmt);
																							$affected_rows=mysqli_stmt_affected_rows($stmt);
																								mysqli_stmt_close($stmt);
																								mysqli_close($dbc);
																								
																								if($affected_rows==1)
																								{
																									echo('Registration Successully<br> Go to Login.');
																								}
																							else
																							{
																								echo '<b>'.$Email_Address.', </b><b style="color: red;">Or</b> <b>'.$matric_no.'</b><br><i style="color: red;"> Already Exists Check and try Again.</i> ';
																							}
																						}
																							
																				}else{
																					echo 'Password field Empty!';
																				}

																			}else{
																				echo 'Gender Not Selected!';
																			}

																		}else{
																			echo 'Date of Birth Not Selected!';
																		}

																	}else{
																	echo ' State and Local Govt Not Selected!';
																}

																}else{
																	echo 'State and Local Govt Not Selected!';
																}

															}else{
																echo 'Phone Number field Empty!';
															}

														}else{
															echo 'Matric Number field Empty!';
														}

													}else{
														echo 'Email Address field Empty!';
													}
												}else{
													echo 'Surname field Empty!';
												}
											}else{
												echo 'First Name field Empty!';
											}
									}
								}
							?>
						</div>
      					<div class="col-full-2">
						<div class="col-two">
							<div class="input-cnt-2">
            				<i class="material-icons">First Name:<span style="color: red">*</span></i>
            				<input type="text" placeholder="E.g: Auwal" name="First_Name" />
         				</div>
						</div>
						<div class="col-two">
							<div class="input-cnt-2">
            				<i class="material-icons">Surname:<span style="color: red">*</span></i>
            				<input type="text" placeholder="E.g: Musa" name="Surname" />
         				</div>
						</div>
						<div class="col-two">
							<div class="input-cnt-2">
            				<i class="material-icons">Other Name:<span style="color: red"></span></i>
            				<input type="text" placeholder="Optional" name="Other_name" />
         				</div>
						</div>
						<div class="col-two">
							<div class="input-cnt-2">
            				<i class="material-icons">Email Add:<span style="color: red">*</span></i>
            				<input type="email" placeholder="E.g: abc123@example.com" name="Email_Address" />
         				</div>
         				</div>
         				<div class="col-two">
								<div class="input-cnt-2">
            					<i class="material-icons">Matric No:<span style="color: red">*</span></i>
            					<input name="matric_no" type="text" placeholder=" School Reg No"  />
         					</div>
							</div>
         				<div class="col-two">
         				<div class="input-cnt-2">
            				<i class="material-icons">Phone No:<span style="color: red">*</span></i>
            				<input type="Number" placeholder="E.g: +2348123872663" name="Phone_Number" />
         				</div>
						</div>
						<div class="col-two">
							<div class="input-cnt-2">
            				<i class="material-icons">State:<span style="color: red">*</span></i>
            				<select name="slct1" id="slct1" onchange="populate(this.id,'slct2')">
            					<option value="Select">Select</option>
            					<option value="Abuja">Federal Capital Territory (Abuja)</option>
            					<option value="Abia">Abia</option>
            					<option value="Adamawa">Adamawa</option>
            					<option value="Akwa Ibom">Akwa Ibom</option>
            					<option value="Anambra">Anambra</option>
            					<option value="Bauchi">Bauchi</option>
            					<option value="Bayelsa">Bayelsa</option>
            					<option value="Benue">Benue</option>
            					<option value="Borno">Borno</option>
            					<option value="Cross River">Cross River</option>
            					<option value="Delta">Delta</option>
            					<option value="Ebonyi">Ebonyi</option>
            					<option value="Edo">Edo</option>
            					<option value="Ekiti">Ekiti</option>
            					<option value="Enugu">Enugu</option>
            					<option value="Gombe">Gombe</option>
            					<option value="Imo">Imo</option>
            					<option value="Jigawa">Jigawa</option>
            					<option value="Kaduna">Kaduna</option>
            					<option value="Kano">Kano</option>
            					<option value="Katsina">Katsina</option>
            					<option value="Kebbi">Kebbi</option>
            					<option value="Kogi">Kogi</option>
            					<option value="Kwara">Kwara</option>
            					<option value="Lagos">Lagos</option>
            					<option value="Nasarawa">Nasarawa</option>
            					<option value="Niger">Niger</option>
            					<option value="Ogun">Ogun</option>
            					<option value="Ondo">Ondo</option>
            					<option value="Osun">Osun</option>
            					<option value="Oyo">Oyo</option>
            					<option value="Plateau">Plateau</option>
            					<option value="Rivers">Rivers</option>
            					<option value="Sokoto">Sokoto</option>
            					<option value="Taraba">Taraba</option>
            					<option value="Yobe">Yobe</option>
            					<option value="Zamfara">Zamfara</option>
            				</select>
         				</div>
						</div>
						<div class="col-two">
							<div class="input-cnt-2">
            				<i class="material-icons">Local Govt:<span style="color: red">*</span></i>
            				<select name="slct2" id="slct2">
            					<option value="">Select</option>
            				</select>
         				</div>
         			</div>
							<div class="col-two">
								<div class="input-cnt-2">
            					<i class="material-icons">Date of Birth:<span style="color: red">*</span></i>
            					<input type="Date" name="Date_of_Birth" />
         					</div>
							</div>
							<div class="col-two">
								<div class="input-cnt-2">
            					<i class="material-icons">Gender:<span style="color: red">*</span></i>
            					<select name="gender" id="Gender">
            						<option value="">Select</option>
            						<option value="Male">Male</option>
            						<option value="Female">Female</option>
            					</select>
         					</div>
							</div>
							<div class="col-two">
								<div class="input-cnt-2">
            					<i class="material-icons">Password:<span style="color: red">*</span></i>
            					<input type="Password" placeholder="E.g: Password" name="Password2" />
         					</div>
							</div>
							<div class="input-cnt-3">
            				<input name="Submit" type="submit" value="Register" />
         				</div>
						</div>
					</form>
					 <script>
					      function validateForm() {
					         var Password2 = document.getElementsByName("Password2")[0].value;
					         var length = Password2.length;
					         if (length<8){
					            alert ("Your Password Can Not Reached Minimum Required, At list Not Less Than 8 characters Include Alphabate and Numbers!");
					            return false;
					         }
					      }
   					</script>
				</div>
			</div>
			</div>
		</div>
	</div>
</div>
	<?php include('footer.php'); ?>
	</div><!-- end of Container-->
</body>
</html>