<?php
/**
 * BFL Cybage_ExpertReview
 *
 * @category   Cybage_ExpertReview Module
 * @package    BFL Cybage_ExpertReview
 * @copyright  2019 All rights reserved.
 * @license    Proprietary
 * @author     BFL (bajaj finserv limited)
 */

namespace Cybage\ExpertReview\Model\ResourceModel\ExpertReviews;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    /**
     * Define resource model
     *
     * @return void
     */
    public function _construct(){
        $this->_init(
                \Cybage\ExpertReview\Model\ExpertReview::class, 
                \Cybage\ExpertReview\Model\ResourceModel\ExpertReviews::class
            );
    }
}