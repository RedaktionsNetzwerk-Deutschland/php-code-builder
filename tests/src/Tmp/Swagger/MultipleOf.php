<?php
/**
 * @file ATTENTION!!! The code below was carefully crafted by a mean machine.
 * Please consider to NOT put any emotional human-generated modifications as the splendid AI will throw them away with no mercy.
 */

namespace Swaggest\PhpCodeBuilder\Tests\Tmp\Swagger;

use Swaggest\JsonSchema\Constraint\Properties;
use Swaggest\JsonSchema\Context;
use Swaggest\JsonSchema\Schema;
use Swaggest\JsonSchema\Structure\ClassStructure;


/**
 * Built from http://json-schema.org/draft-04/schema#/properties/multipleOf
 *  <- #/definitions/multipleOf
 * @method static float import($data, Context $options = null)
 */
class MultipleOf extends ClassStructure
{
    /**
     * @param Properties|static $properties
     * @param Schema $ownerSchema
     */
    public static function setUpProperties($properties, Schema $ownerSchema)
    {
        $ownerSchema->type = Schema::NUMBER;
        $ownerSchema->minimum = 0;
        $ownerSchema->exclusiveMinimum = true;
        $ownerSchema->setFromRef('http://json-schema.org/draft-04/schema#/properties/multipleOf');
        $ownerSchema->setFromRef('#/definitions/multipleOf');
    }
}