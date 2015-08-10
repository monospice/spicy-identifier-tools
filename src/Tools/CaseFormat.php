<?php

namespace Monospice\SpicyIdentifiers\Tools;

/**
 * Constants that represent different identifier case formats
 *
 * @author Cy Rossignol <cy.rossignol@yahoo.com>
 */
class CaseFormat
{

    /**
     * string Represents alllowercase (with no delimiter)
     */
    const LOWERCASE = 'Lowercase';

    /**
     * string Represents ALLUPPERCASE (with no delimiter)
     */
    const UPPERCASE = 'Uppercase';

    /**
     * string Represents camelCase
     */
    const CAMEL_CASE = 'CamelCase';

    /**
     * string Represents UpperCamelCase
     */
    const UPPER_CAMEL_CASE = 'UpperCamelCase';

    /**
     * string Represents camelCaseWithACRNMS (with Acronyms)
     */
    const CAMEL_CASE_WITH_ACRONYMS = 'CamelCaseWithAcronyms';

    /**
     * string Represents UpperCamelCaseWithACRNMS (with Acronyms)
     */
    const UPPER_CAMEL_CASE_WITH_ACRONYMS = 'UpperCamelCaseWithAcronyms';

    /**
     * string Represents underscore_case
     */
    const UNDERSCORE = 'Underscore';

    /**
     * string Represents Upper_Underscore_Case
     */
    const UPPER_UNDERSCORE = 'UpperUnderscore';

    /**
     * string Represents CAPITALIZED_UNDERSCORE_CASE
     */
    const CAPS_UNDERSCORE = 'CapsUnderscore';

    /**
     * string Represents underscore_case_with_ACRNMS (with Acronyms)
     */
    const UNDERSCORE_WITH_ACRONYMS = 'UnderscoreWithAcronyms';

    /**
     * string Represents Upper_Underscore_Case_With_ACRNMS (with Acronyms)
     */
    const UPPER_UNDERSCORE_WITH_ACRONYMS = 'UpperUnderscoreWithAcronyms';

    /**
     * string An alias for CaseFormat::UNDERSCORE
     */
    const SNAKE_CASE = 'Underscore';

    /**
     * string An alias for CaseFormat::UPPER_UNDERSCORE
     */
    const UPPER_SNAKE_CASE = 'UpperUnderscore';

    /**
     * string An alias for CaseFormat::CAPS_UNDERSCORE
     */
    const CAPS_SNAKE_CASE = 'CapsUnderscore';

    /**
     * string An alias for CaseFormat::UNDERSCORE_WITH_ACRONYMS
     */
    const SNAKE_CASE_WITH_ACRONYMS = 'UnderscoreWithAcronyms';

    /**
     * string An alias for CaseFormat::UPPER_UNDERSCORE_WITH_ACRONYMS
     */
    const UPPER_SNAKE_CASE_WITH_ACRONYMS = 'UpperUnderscoreWithAcronyms';

    /**
     * string Represents hyphenated-case
     */
    const HYPHEN = 'Hyphen';

    /**
     * string Represents Upper-Hyphenated-Case
     */
    const UPPER_HYPHEN = 'UpperHyphen';

    /**
     * string Represents CAPITALIZED-HYPENATED-CASE
     */
    const CAPS_HYPHEN = 'CapsHyphen';

    /**
     * string Represents hyphenated-case-with-ACRNMS (with Acronyms)
     */
    const HYPHEN_WITH_ACRONYMS = 'HyphenWithAcronyms';

    /**
     * string Represents Upper-Hyphenated-Case-With-ACRNMS (with Acronyms)
     */
    const UPPER_HYPHEN_WITH_ACRONYMS = 'UpperHyphenWithAcronyms';
}
