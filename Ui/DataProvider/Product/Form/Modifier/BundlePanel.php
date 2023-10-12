<?php

namespace ReesMcIvor\CollapseBundleAccordions\Ui\DataProvider\Product\Form\Modifier;

use Magento\Ui\Component\Container;

class BundlePanel extends \Magento\Bundle\Ui\DataProvider\Product\Form\Modifier\BundlePanel
{

    /**
     * {@inheritdoc}
     * @SuppressWarnings(PHPMD.ExcessiveMethodLength)
     */
    public function modifyMeta(array $meta)
    {
        $meta = parent::modifyMeta($meta);
        $meta['bundle-items']['children']['bundle_options']['children']['record']['children']['product_bundle_container']['arguments']['data']['config']['opened'] = false;
        return $meta;
    }


}
