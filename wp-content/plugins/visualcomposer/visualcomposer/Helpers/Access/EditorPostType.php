<?php

namespace VisualComposer\Helpers\Access;

if (!defined('ABSPATH')) {
    header('Status: 403 Forbidden');
    header('HTTP/1.1 403 Forbidden');
    exit;
}

use VisualComposer\Framework\Illuminate\Support\Helper;

class EditorPostType implements Helper
{
    public function isEditorEnabled($postType)
    {

        return in_array($postType, $this->getEnabledPostTypes());
    }

    public function getEnabledPostTypes()
    {
        $optionsHelper = vchelper('Options');

        return (array)$optionsHelper->get('post-types', ['post', 'page']);
    }
}
