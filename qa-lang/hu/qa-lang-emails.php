<?php
/*
	Question2Answer by Gideon Greenspan and contributors
	http://www.question2answer.org/

	File: qa-include/qa-lang-emails.php
	Description: Language phrases for email notifications


	This program is free software; you can redistribute it and/or
	modify it under the terms of the GNU General Public License
	as published by the Free Software Foundation; either version 2
	of the License, or (at your option) any later version.

	This program is distributed in the hope that it will be useful,
	but WITHOUT ANY WARRANTY; without even the implied warranty of
	MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
	GNU General Public License for more details.

	More about this license: http://www.question2answer.org/license.php
*/

	return array(
		'a_commented_body' => "Új hozzászólás érkezett a válaszodhoz a következő felhasználótól: ^c_handle:\n\n^open^c_content^close\n\nA Te válaszod ez volt:\n\n^open^c_context^close\n\nA hozzászólásra itt válaszolhatsz:\n\n^url\n\nKöszönjük, \n\n^site_title",
		'a_commented_subject' => '[^site_title] Új hozzászólás érkezett',

		'a_followed_body' => "Új kapcsolódó kérdés érkezett a következő felhasználótól: ^q_handle:\n\n^open^q_title^close\n\nA Te válaszod ez volt:\n\n^open^a_content^close\n\nItt válaszolhatsz az új kérdésre:\n\n^url\n\nThank you,\n\n^site_title",
		'a_followed_subject' => '[^site_title] Új kapcsolódó kérdés érkezett',

		'a_selected_body' => "Gratulálunk! ^s_handle a Te válaszodat jelölte meg a legjobbként:\n\n^open^a_content^close\n\nA kérdés ez volt:\n\n^open^q_title^close\n\nItt találod a válaszodat:\n\n^url\n\nKöszönjük,\n\n^site_title",
		'a_selected_subject' => '[^site_title] A Te válaszod a legjobb!',

		'c_commented_body' => "^c_handle új hozzászólást küldött be a Te hozzászólásodhoz:\n\n^open^c_content^close\n\nA következő hozzászólások érkeztek:\n\n^open^c_context^close\n\nA következő linken válaszolhatsz:\n\n^url\n\nKöszönjük,\n\n^site_title",
		'c_commented_subject' => '[^site_title] Új hozzászólás érkezett',

		'confirm_body' => "Kérlek, kattintsd meg az alábbi linket az e-mail címed megerősítéséhez:\n\n^url\n\nThank you,\n^site_title",
		'confirm_subject' => '[^site_title] E-mail cím megerősítése',

		'feedback_body' => "Üzenet:\n^message\n\nNév:\n^name\n\nE-mail:\n^email\n\nElőző oldal:\n^previous\n\nFelhasználó:\n^url\n\nIP cím:\n^ip\n\nBöngésző:\n^browser",
		'feedback_subject' => '^feedback',

		'flagged_body' => "A következő tartalomhoz ^flags jelzés érkezett: ^p_handle:\n\n^open^p_context^close\n\nA tartalom címe:\n\n^url\n\n\nJelzett tartalmak listája:\n\n^a_url\n\n\nKöszönjük,\n\n^site_title",
		'flagged_subject' => '[^site_title] Jelzések',

		'moderate_body' => "^p_handle tartalma moderálást igényel:\n\n^open^p_context^close\n\nKattints ide a jóváhagyáshoz vagy elutasításhoz:\n\n^url\n\n\nÖsszes moderálandó tartalom:\n\n^a_url\n\n\nKöszönjük,\n\n^site_title",
		'moderate_subject' => '[^site_title] Moderáció',

		'new_password_body' => "Mellékelten küldjük az új jelszavadat.\n\nJelszó: ^password\n\nJavasoljuk, hogy a jelszavadat azonnal változtasd meg amint beléptél.\n\nKöszönjük,\n^site_title\n^url",
		'new_password_subject' => '[^site_title] Új jelszó',

		'private_message_body' => "Privát üzenet érkezett a következő felhasználótól: ^f_handle:\n\n^open^message^close\n\n^moreKöszönjük,\n\n^site_title\n\n\nA privát üzeneteket itt tudod letiltani:\n^a_url",
		'private_message_info' => "^f_handle profilja:\n\n^url\n\n",
		'private_message_reply' => "Itt válaszolhatsz ^f_handle üzenetére:\n\n^url\n\n",
		'private_message_subject' => '[^site_title] Privát üzenet a következő felhasználótól: ^f_handle',

		'q_answered_body' => "^a_handle megválaszolta a kérdésedet:\n\n^open^a_content^close\n\nEz volt a kérdésed:\n\n^open^q_title^close\n\nHa ez a válasz megfelelő, jelöld meg a legjobbnak:\n\n^url\n\nKöszönjük,\n\n^site_title",
		'q_answered_subject' => '[^site_title] Válasz érkezett a kérdésedre',

		'q_commented_body' => "Your question on ^site_title has a new comment by ^c_handle:\n\n^open^c_content^close\n\nYour question was:\n\n^open^c_context^close\n\nYou may respond by adding your own comment:\n\n^url\n\nThank you,\n\n^site_title",
		'q_commented_subject' => '[^site_title] Megjegyzés érkezett a kérdésedhez',

		'q_posted_body' => "^q_handle új kérdést küldött be:\n\n^open^q_title\n\n^q_content^close\n\nA kérdést az alábbi linken találod:\n\n^url\n\nKöszönjük,\n\n^site_title",
		'q_posted_subject' => '[^site_title] Új kérdés érkezett',

		'remoderate_body' => "An edited post by ^p_handle requires your reapproval:\n\n^open^p_context^close\n\nClick below to approve or hide the edited post:\n\n^url\n\n\nClick below to review all queued posts:\n\n^a_url\n\n\nThank you,\n\n^site_title",
		'remoderate_subject' => '^site_title moderation',

		'reset_body' => "A jelszavad visszaállításához kattintsd meg az alábbi linket:\n\n^url\n\nAlternatívaként megadhatod ezt a kódot:\n\nCode: ^code\n\nHa nem Te kértél jelszó-visszaállítást, hagyd figyelmen kívül ezt az üzenetet.\n\nKöszönjük,\n^site_title",
		'reset_subject' => '[^site_title] Jelszó visszaállítása',

		'to_handle_prefix' => "^,\n\n",

		'u_registered_body' => "^u_handle regisztrált az oldalra.\n\nAz új felhasználó profilja:\n\n^url\n\nKöszönjük,\n\n^site_title",
		'u_registered_subject' => '[^site_title] Új regisztráció',
		'u_to_approve_body' => "^u_handle regisztrált az oldalra.\n\nRegisztráció jóváhagyása:\n\n^url\n\nJóváhagyásra váró regisztrációk listája:\n\n^a_url\n\nKöszönjük,\n\n^site_title",

		'u_approved_body' => "A felhasználód profilja:\n\n^url\n\nKöszönjük,\n\n^site_title",
		'u_approved_subject' => '[^site_title] Regisztráció jóváhagyva',

		'wall_post_body' => "^f_handle írt a faladra:\n\n^open^post^close\n\nItt válaszolhatsz rá:\n\n^url\n\nKöszönjük,\n\n^site_title",
		'wall_post_subject' => '[^site_title] Új post érkezett a faladra',

		'welcome_body' => "Köszönjük a regisztrációdat!\n\n^custom^confirmA belépési adataid a következőek:\n\nFelhasználónév: ^handle\nE-mail cím: ^email\n\nKöszönjük,\n\n^site_title\n^url",
		'welcome_confirm' => "Kattints ide az e-mail címed megerősítéséhez:\n\n^url\n\n",
		'welcome_subject' => '[^site_title] Üdvözlünk!',
	);


/*
	Omit PHP closing tag to help avoid accidental output
*/