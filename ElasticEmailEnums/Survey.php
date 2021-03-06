<?php

namespace ElasticEmailEnums
{
    class Survey
{
    /**
     * Survey identifier
     */
    public /*Guid*/ $PublicSurveyID;

    /**
     * Creation date.
     */
    public /*DateTime*/ $DateCreated;

    /**
     * Last change date
     */
    public /*?DateTime*/ $DateUpdated;

    /**
     * 
     */
    public /*?DateTime*/ $ExpiryDate;

    /**
     * Filename
     */
    public /*string*/ $Name;

    /**
     * Activate, delete, or pause your survey
     */
    public /*\ElasticEmailEnums\SurveyStatus*/ $Status;

    /**
     * Number of results count
     */
    public /*int*/ $ResultCount;

    /**
     * 
     */
    public /*Array<\ElasticEmailEnums\SurveyStep>*/ $SurveySteps;

    /**
     * URL of the survey
     */
    public /*string*/ $SurveyLink;

}
}

?>