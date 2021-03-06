<?php

namespace ElasticEmailEnums
{
    class SurveyResultInfo
{
    /**
     * Identifier of the result
     */
    public /*string*/ $SurveyResultID;

    /**
     * IP address
     */
    public /*string*/ $CreatedFromIP;

    /**
     * Completion date
     */
    public /*DateTime*/ $DateCompleted;

    /**
     * Start date
     */
    public /*DateTime*/ $DateStart;

    /**
     * Answers for the survey
     */
    public /*Array<\ElasticEmailEnums\SurveyResultAnswerInfo>*/ $SurveyResultAnswers;

}
}

?>