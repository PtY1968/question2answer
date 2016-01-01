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

		'moderate_body' => "A post by ^p_handle requires your approval:\n\n^open^p_context^close\n\nClick below to approve or reject the post:\n\n^url\n\n\nClick below to review all queued posts:\n\n^a_url\n\n\nThank you,\n\n^site_title",
		'moderate_subject' => '^site_title moderation',

		'new_password_body' => "Your new password for ^site_title is below.\n\nPassword: ^password\n\nIt is recommended to change this password immediately after logging in.\n\nThank you,\n^site_title\n^url",
		'new_password_subject' => '^site_title - Your New Password',

		'private_message_body' => "You have been sent a private message by ^f_handle on ^site_title:\n\n^open^message^close\n\n^moreThank you,\n\n^site_title\n\n\nTo block private messages, visit your account page:\n^a_url",
		'private_message_info' => "More information about ^f_handle:\n\n^url\n\n",
		'private_message_reply' => "Click below to reply to ^f_handle by private message:\n\n^url\n\n",
		'private_message_subject' => 'Message from ^f_handle on ^site_title',

		'q_answered_body' => "Your question on ^site_title has been answered by ^a_handle:\n\n^open^a_content^close\n\nYour question was:\n\n^open^q_title^close\n\nIf you like this answer, you may select it as the best:\n\n^url\n\nThank you,\n\n^site_title",
		'q_answered_subject' => 'Your ^site_title question was answered',

		'q_commented_body' => "Your question on ^site_title has a new comment by ^c_handle:\n\n^open^c_content^close\n\nYour question was:\n\n^open^c_context^close\n\nYou may respond by adding your own comment:\n\n^url\n\nThank you,\n\n^site_title",
		'q_commented_subject' => 'Your ^site_title question has a new comment',

		'q_posted_body' => "A new question has been asked by ^q_handle:\n\n^open^q_title\n\n^q_content^close\n\nClick below to see the question:\n\n^url\n\nThank you,\n\n^site_title",
		'q_posted_subject' => '^site_title has a new question',

		'remoderate_body' => "An edited post by ^p_handle requires your reapproval:\n\n^open^p_context^close\n\nClick below to approve or hide the edited post:\n\n^url\n\n\nClick below to review all queued posts:\n\n^a_url\n\n\nThank you,\n\n^site_title",
		'remoderate_subject' => '^site_title moderation',

		'reset_body' => "Please click below to reset your password for ^site_title.\n\n^url\n\nAlternatively, enter the code below into the field provided.\n\nCode: ^code\n\nIf you did not ask to reset your password, please ignore this message.\n\nThank you,\n^site_title",
		'reset_subject' => '^site_title - Reset Forgotten Password',

		'to_handle_prefix' => "^,\n\n",

		'u_registered_body' => "A new user has registered as ^u_handle.\n\nClick below to view the user profile:\n\n^url\n\nThank you,\n\n^site_title",
		'u_registered_subject' => '^site_title has a new registered user',
		'u_to_approve_body' => "A new user has registered as ^u_handle.\n\nClick below to approve the user:\n\n^url\n\nClick below to review all users waiting for approval:\n\n^a_url\n\nThank you,\n\n^site_title",

		'u_approved_body' => "You can see your new user profile here:\n\n^url\n\nThank you,\n\n^site_title",
		'u_approved_subject' => 'Your ^site_title user has been approved',

		'wall_post_body' => "^f_handle has posted on your user wall at ^site_title:\n\n^open^post^close\n\nYou may respond to the post here:\n\n^url\n\nThank you,\n\n^site_title",
		'wall_post_subject' => 'Post on your ^site_title wall',

		'welcome_body' => "Thank you for registering for ^site_title.\n\n^custom^confirmYour login details are as follows:\n\nUsername: ^handle\nEmail: ^email\n\nPlease keep this information safe for future reference.\n\nThank you,\n\n^site_title\n^url",
		'welcome_confirm' => "Please click below to confirm your email address.\n\n^url\n\n",
		'welcome_subject' => 'Welcome to ^site_title!',
	);


/*
	Omit PHP closing tag to help avoid accidental output
*/