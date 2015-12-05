<?php

class NewsManager
{
	private static $twenty15 = array(
		"11.29.15" => "Matthew House Founder Anne Woolger featured in CBC article on Refugee Children",
		"11.17.15" => "Matthew House affirms Statement of Canadian Council for Refugees regarding Recent Events",
		"09.15.15" => "National Rally for Refugees - Thursday, September 17",
		"09.10.15" => "Reflections from our Founder on current refugee crisis",
		"09.05.15" => "Matthew House on CBC National News",
		"09.04.15" => "Matthew House Featured in the Globe and Mail",
		"08.18.15" => 'Matthew House Launches "Music in the Garden" series with accomplished musicians!',
		"08.07.15" => "CP24 Features Matthew House!",
		"08.04.15" => "Celebrating 17 years of welcoming the World!",
		"07.23.15" => "Matthew House celebrates new Milestone for Refugee Rights, July 23, 2015",
		"06.19.15" => "Matthew House Celebrates World Refugee Day!",
		"06.09.15" => "Emmanuel Jal lends his support to our screening of The Good Lie!",
		"04.20.15" => "A UNHCR delegation visits Matthew House",
		"04.10.15" => "Save the Date! Special screening of the Good Lie",
		"01.31.15" => "Matthew House to host first ever Winterfest!!",
		);

	private static $twenty14 = array(
		"11.14.14" => "Matthew House teen featured in this Saturday's Toronto Star!",
		"11.12.14" => "Matthew House to be featured in the Toronto Star this weekend",
		"10.23.14" => "Thank you to our Scotiabank Charity Run team!",
		"10.15.14" => "There's still time to help us reach our goal in the Scotiabank Charity Run!",
		"09.09.14" => "Have you heard of the ready tours?",
		"08.08.14" => "Matthew House Celebrates 16 years of welcoming refugees!",
		"07.09.14" => "We celebrate the Federal Court's judgement concerning the Federal Government's cuts to the Interim Federal Health Program",
		"06.26.14" => "Spring Fundraiser with Anna Maria Tremonti a great success!",
		"06.04.14" => "Matthew House to officially launch new Flight to Freedom program at June 11th Fundraiser",
		"05.16.14" => "Breaking News! Anna Maria Tremonti host of CBC Radio’s The Current to host our Spring Fundraiser, June 11th!",
		"04.04.14" => "Happy Refugee Rights Day!",
		"02.21.14" => "Volunteer Networking Event a Success!",
		"01.25.14" => "Volunteer Painters give MH a lift!",
		);

	private static $twenty13 = array(
		"12.14.13" => "MH Director interviewed on Current Events Program Context",
		"12.02.13" => "MH Annual Christmas Party, Sat. Dec. 7th",
		"11.20.13" => "MH Executive Director is guest on CONTEXT with Lorna Dueck",
		"10.21.13" => "Great Run - and still time to support it!",
		"10.09.13" => "Former resident joins MH charity run team - you can too!",
		"09.20.13" => "New members join Matthew House staff team",
		"08.21.13" => "Summer camp a fantastic experience!!",
		"07.22.13" => "International Potluck on 15th Anniversary Date - August 6th",
		"06.15.13" => "15th Anniversary Gala - A Great Success!!",
		"05.25.13" => "Summer Student Job: Refugee Settlement Assistant",
		"05.22.13" => "In memory of Richard Woolger",
		"04.13.13" => "15th anniversary gala has growing roster of honoured guests. Join us June 12, 2013",
		"04.05.13" => "Matthew House celebrates Refugee Rights Day with passion",
		"04.04.13" => "Today is Canadian Refugee Rights Day!",
		"03.30.13" => 'Matthew House featured on CBC Radio "The World This Weekend"',
		"02.08.13" => "Diamond Jubilee Medal presented to Matthew House Executive Director",
		);

	private static $twenty12 = array(
		"12.13.12" => "Former Matthew House Board Chair, Clarence Webb remembered",
		"11.12.12" => "Website LAUNCH PARTY",
		"10.12.12" => "Ready to run in Charity Challenge this Sunday",
		"09.21.12" => "The 25:35 Campaign",
		"09.20.12" => "Final Charity Challenge Team Gathering",
		"09.19.12" => "Anne Woolger at SCBC",
		);

	public static function getYears() {
		return array(
		"2015" => NewsManager::$twenty15,
		"2014" => NewsManager::$twenty14,
		"2013" => NewsManager::$twenty13,
		"2012" => NewsManager::$twenty12);
	}
	
	const CURRENT_YEAR = "2015";

	public static function getRecentNews($count)
	{
		$articles = NewsManager::getYears()[NewsManager::CURRENT_YEAR];
		return array_slice($articles, 0, $count, true);
	}

	public static function getNewsForYear($year)
	{
		return NewsManager::getYears()[$year];
	}
}

?>