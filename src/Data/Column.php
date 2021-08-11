<?php

namespace Silktide\SemRushApi\Data;

abstract class Column
{
    use ConstantTrait;

    const COLUMN_OVERVIEW_ADWORDS_BUDGET = "Ac";
    const COLUMN_OVERVIEW_ADWORDS_KEYWORDS = "Ad";
    const COLUMN_OVERVIEW_ADWORDS_TRAFFIC = "At";
    const COLUMN_OVERVIEW_DATABASE = "Db";
    const COLUMN_OVERVIEW_DOMAIN = "Dn";
    const COLUMN_OVERVIEW_ORGANIC_BUDGET = "Oc";
    const COLUMN_OVERVIEW_ORGANIC_KEYWORDS = "Or";
    const COLUMN_OVERVIEW_ORGANIC_TRAFFIC = "Ot";
    const COLUMN_OVERVIEW_SEMRUSH_RATING = "Rk";
    const COLUMN_OVERVIEW_DATE = "Dt";
    const COLUMN_DOMAIN_KEYWORD = "Ph";
    const COLUMN_DOMAIN_KEYWORD_ORGANIC_POSITION = "Po";
    const COLUMN_DOMAIN_KEYWORD_PREVIOUS_ORGANIC_POSITION = "Pp";
    const COLUMN_KEYWORD_AVERAGE_QUERIES = "Nq";
    const COLUMN_KEYWORD_AVERAGE_CLICK_PRICE = "Cp";
    const COLUMN_DOMAIN_KEYWORD_TRAFFIC_PERCENTAGE = "Tr";
    const COLUMN_DOMAIN_KEYWORD_TRAFFIC_AMMOUNT = "Tg";
    const COLUMN_KEYWORD_ESTIMATED_PRICE = "Tc";
    const COLUMN_KEYWORD_COMPETITIVE_AD_DENSITY = "Co";
    const COLUMN_KEYWORD_ORGANIC_NUMBER_OF_RESULTS = "Nr";
    const COLUMN_KEYWORD_INTEREST = "Td";
    const COLUMN_DOMAIN_KEYWORD_AD_TITLE = "Tt";
    const COLUMN_DOMAIN_KEYWORD_AD_TEXT = "Ds";
    const COLUMN_DOMAIN_KEYWORD_VISIBLE_URL = "Vu";
    const COLUMN_DOMAIN_KEYWORD_TARGET_URL = "Ur";
    const COLUMN_DOMAIN_KEYWORD_NUMBER = "Pc";
    const COLUMN_DOMAIN_KEYWORD_POSITION_DIFFERENCE = "Pd";
    const COLUMN_DOMAIN_ADWORD_POSITION = "Ab";
    const COLUMN_KEYWORD_DIFFICULTY_INDEX = "Kd";
    const COLUMN_ADVERTISER_AD_DOMAIN = "domain";
    const COLUMN_ADVERTISER_AD_COUNT = "ads_count";
    const COLUMN_ADVERTISER_AD_FIRST_SEEN = "first_seen";
    const COLUMN_ADVERTISER_AD_LAST_SEEN = "last_seen";
    const COLUMN_ADVERTISER_AD_TIMES_SEEN = "times_seen";
    const COLUMN_ADVERTISER_AD_TITLE = "title";
    const COLUMN_ADVERTISER_AD_TEXT = "text";
    const COLUMN_ADVERTISER_AD_URL = "visible_url";
    const COLUMN_ADVERTISER_ADS_OVERALL = "ads_overall";
    const COLUMN_ADVERTISER_MEDIA_ADS_OVERALL = "media_ads_overall";
    const COLUMN_ADVERTISER_TEXT_ADS_OVERALL = "text_ads_overall";
    const COLUMN_ADVERTISER_DOMAIN_OVERALL = "domain_overall";
    const COLUMN_TIMESTAMP = 'Ts';
    const COLUMN_SERP_FEATURES_DOMAIN = 'Fp';
    const COLUMN_SERP_FEATURES_KEYWORD = 'Fk';
    const COLUMN_SERP_FEATURE_DOMAIN_INSTANT_ANSWER = 'FP0';
    const COLUMN_SERP_FEATURE_DOMAIN_KNOWLEDGE_PANEL = 'FP1';
    const COLUMN_SERP_FEATURE_DOMAIN_CAROUSEL = 'FP2';
    const COLUMN_SERP_FEATURE_DOMAIN_LOCAL_PACK = 'FP3';
    const COLUMN_SERP_FEATURE_DOMAIN_TOP_STORIES = 'FP4';
    const COLUMN_SERP_FEATURE_DOMAIN_IMAGE_PACK = 'FP5';
    const COLUMN_SERP_FEATURE_DOMAIN_SITE_LINKS = 'FP6';
    const COLUMN_SERP_FEATURE_DOMAIN_REVIEWS = 'FP7';
    const COLUMN_SERP_FEATURE_DOMAIN_TWEET = 'FP8';
    const COLUMN_SERP_FEATURE_DOMAIN_VIDEO = 'FP9';
    const COLUMN_SERP_FEATURE_DOMAIN_FEATURED_VIDEO = 'FP10';
    const COLUMN_SERP_FEATURE_DOMAIN_FEATURED_SNIPPET = 'FP11';
    const COLUMN_SERP_FEATURE_DOMAIN_AMP = 'FP12';
    const COLUMN_SERP_FEATURE_DOMAIN_IMAGE = 'FP13';
    const COLUMN_SERP_FEATURE_DOMAIN_ADWORDS_TOP = 'FP14';
    const COLUMN_SERP_FEATURE_DOMAIN_ADWORDS_BOTTOM = 'FP15';
    const COLUMN_SERP_FEATURE_DOMAIN_SHOPPING_ADS = 'FP16';
    const COLUMN_SERP_FEATURE_DOMAIN_HOTELS_PACK = 'FP17';
    const COLUMN_SERP_FEATURE_DOMAIN_JOBS_SEARCH = 'FP18';
    const COLUMN_SERP_FEATURE_DOMAIN_FEATURED_IMAGES = 'FP19';
    const COLUMN_SERP_FEATURE_DOMAIN_VIDEO_CAROUSEL = 'FP20';
    const COLUMN_SERP_FEATURE_DOMAIN_ALSO_ASK = 'FP21';
    const COLUMN_SERP_FEATURE_DOMAIN_FAQ = 'FP22';
    const COLUMN_SERP_FEATURE_DOMAIN_FLIGHTS = 'FP23';
    const COLUMN_SERP_FEATURE_KEYWORD_INSTANT_ANSWER = 'FK0';
    const COLUMN_SERP_FEATURE_KEYWORD_KNOWLEDGE_PANEL = 'FK1';
    const COLUMN_SERP_FEATURE_KEYWORD_CAROUSEL = 'FK2';
    const COLUMN_SERP_FEATURE_KEYWORD_LOCAL_PACK = 'FK3';
    const COLUMN_SERP_FEATURE_KEYWORD_TOP_STORIES = 'FK4';
    const COLUMN_SERP_FEATURE_KEYWORD_IMAGE_PACK = 'FK5';
    const COLUMN_SERP_FEATURE_KEYWORD_SITE_LINKS = 'FK6';
    const COLUMN_SERP_FEATURE_KEYWORD_REVIEWS = 'FK7';
    const COLUMN_SERP_FEATURE_KEYWORD_TWEET = 'FK8';
    const COLUMN_SERP_FEATURE_KEYWORD_VIDEO = 'FK9';
    const COLUMN_SERP_FEATURE_KEYWORD_FEATURED_VIDEO = 'FK10';
    const COLUMN_SERP_FEATURE_KEYWORD_FEATURED_SNIPPET = 'FK11';
    const COLUMN_SERP_FEATURE_KEYWORD_AMP = 'FK12';
    const COLUMN_SERP_FEATURE_KEYWORD_IMAGE = 'FK13';
    const COLUMN_SERP_FEATURE_KEYWORD_ADWORDS_TOP = 'FK14';
    const COLUMN_SERP_FEATURE_KEYWORD_ADWORDS_BOTTOM = 'FK15';
    const COLUMN_SERP_FEATURE_KEYWORD_SHOPPING_ADS = 'FK16';
    const COLUMN_SERP_FEATURE_KEYWORD_HOTELS_PACK = 'FK17';
    const COLUMN_SERP_FEATURE_KEYWORD_JOBS_SEARCH = 'FK18';
    const COLUMN_SERP_FEATURE_KEYWORD_FEATURED_IMAGES = 'FK19';
    const COLUMN_SERP_FEATURE_KEYWORD_VIDEO_CAROUSEL = 'FK20';
    const COLUMN_SERP_FEATURE_KEYWORD_ALSO_ASK = 'FK21';
    const COLUMN_SERP_FEATURE_KEYWORD_FAQ = 'FK22';
    const COLUMN_SERP_FEATURE_KEYWORD_FLIGHTS = 'FK23';

    /**
    Dn, Ur, Fk, Fp
     *     * Get all the possible columns
     *
     * @return string[]
     */
    public static function getColumns()
    {
        return self::getConstants();
    }

    /**
     * Check if the given code is a valid column code
     *
     * @param string $code
     * @return bool
     */
    public static function isValidColumn($code)
    {
        return in_array($code, self::getColumns());
    }
}
