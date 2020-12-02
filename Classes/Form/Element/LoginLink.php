<?php

namespace Cabag\CabagLoginas\Form\Element;

use Cabag\CabagLoginas\Hook\ToolbarItemHook;
use TYPO3\CMS\Backend\Form\Element\AbstractFormElement;
use TYPO3\CMS\Core\Utility\GeneralUtility;

class LoginLink extends AbstractFormElement
{
    public function render()
    {
        $result = $this->initializeResultArray();
        $data['row'] = $this->data['databaseRow'];
        $toolbarItemHook = GeneralUtility::makeInstance(ToolbarItemHook::class);
        $link = $toolbarItemHook->getLink($data);
        $result['html'] = $link;
        return $result;
    }
}