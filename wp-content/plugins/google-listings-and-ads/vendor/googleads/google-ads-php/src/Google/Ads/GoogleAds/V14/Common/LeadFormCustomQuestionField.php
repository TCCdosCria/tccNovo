<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v14/common/asset_types.proto

namespace Google\Ads\GoogleAds\V14\Common;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * One custom question input field instance within a form.
 *
 * Generated from protobuf message <code>google.ads.googleads.v14.common.LeadFormCustomQuestionField</code>
 */
class LeadFormCustomQuestionField extends \Google\Protobuf\Internal\Message
{
    /**
     * The exact custom question field text (for example, "What kind of vehicle
     * do you have?").
     *
     * Generated from protobuf field <code>string custom_question_text = 1;</code>
     */
    protected $custom_question_text = '';
    protected $answers;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $custom_question_text
     *           The exact custom question field text (for example, "What kind of vehicle
     *           do you have?").
     *     @type \Google\Ads\GoogleAds\V14\Common\LeadFormSingleChoiceAnswers $single_choice_answers
     *           Answer configuration for a single choice question.
     *           Minimum of 2 answers and maximum of 12 allowed.
     *     @type bool $has_location_answer
     *           Answer configuration for location question. If true, campaign/account
     *           level location data (state, city, business name etc) will be rendered on
     *           the Lead Form.
     *           Starting V13.1, has_location_answer can only be set for "What is your
     *           preferred dealership?" question, for advertisers with Location Assets
     *           setup at campaign/account level.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V14\Common\AssetTypes::initOnce();
        parent::__construct($data);
    }

    /**
     * The exact custom question field text (for example, "What kind of vehicle
     * do you have?").
     *
     * Generated from protobuf field <code>string custom_question_text = 1;</code>
     * @return string
     */
    public function getCustomQuestionText()
    {
        return $this->custom_question_text;
    }

    /**
     * The exact custom question field text (for example, "What kind of vehicle
     * do you have?").
     *
     * Generated from protobuf field <code>string custom_question_text = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setCustomQuestionText($var)
    {
        GPBUtil::checkString($var, True);
        $this->custom_question_text = $var;

        return $this;
    }

    /**
     * Answer configuration for a single choice question.
     * Minimum of 2 answers and maximum of 12 allowed.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v14.common.LeadFormSingleChoiceAnswers single_choice_answers = 2;</code>
     * @return \Google\Ads\GoogleAds\V14\Common\LeadFormSingleChoiceAnswers|null
     */
    public function getSingleChoiceAnswers()
    {
        return $this->readOneof(2);
    }

    public function hasSingleChoiceAnswers()
    {
        return $this->hasOneof(2);
    }

    /**
     * Answer configuration for a single choice question.
     * Minimum of 2 answers and maximum of 12 allowed.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v14.common.LeadFormSingleChoiceAnswers single_choice_answers = 2;</code>
     * @param \Google\Ads\GoogleAds\V14\Common\LeadFormSingleChoiceAnswers $var
     * @return $this
     */
    public function setSingleChoiceAnswers($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V14\Common\LeadFormSingleChoiceAnswers::class);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * Answer configuration for location question. If true, campaign/account
     * level location data (state, city, business name etc) will be rendered on
     * the Lead Form.
     * Starting V13.1, has_location_answer can only be set for "What is your
     * preferred dealership?" question, for advertisers with Location Assets
     * setup at campaign/account level.
     *
     * Generated from protobuf field <code>bool has_location_answer = 3;</code>
     * @return bool
     */
    public function getHasLocationAnswer()
    {
        return $this->readOneof(3);
    }

    public function hasHasLocationAnswer()
    {
        return $this->hasOneof(3);
    }

    /**
     * Answer configuration for location question. If true, campaign/account
     * level location data (state, city, business name etc) will be rendered on
     * the Lead Form.
     * Starting V13.1, has_location_answer can only be set for "What is your
     * preferred dealership?" question, for advertisers with Location Assets
     * setup at campaign/account level.
     *
     * Generated from protobuf field <code>bool has_location_answer = 3;</code>
     * @param bool $var
     * @return $this
     */
    public function setHasLocationAnswer($var)
    {
        GPBUtil::checkBool($var);
        $this->writeOneof(3, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getAnswers()
    {
        return $this->whichOneof("answers");
    }

}

