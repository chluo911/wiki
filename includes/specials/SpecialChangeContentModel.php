<?php

class SpecialChangeContentModel extends FormSpecialPage
{
    public function __construct()
    {
        parent::__construct('ChangeContentModel', 'editcontentmodel');
    }

    public function doesWrites()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @var Title|null
     */
    private $title;

    /**
     * @var Revision|bool|null
     *
     * A Revision object, false if no revision exists, null if not loaded yet
     */
    private $oldRevision;

    protected function setParameter($par)
    {
        $par = $this->getRequest()->getVal('pagetitle', $par);
        $title = Title::newFromText($par);
        if ($title) {
            $this->title = $title;
            $this->par = $title->getPrefixedText();
        } else {
            $this->par = '';
        }
    }

    protected function getDisplayFormat()
    {
        return 'ooui';
    }

    protected function alterForm(HTMLForm $form)
    {
        if (!$this->title) {
            $form->setMethod('GET');
        }

        $this->addHelpLink('Help:ChangeContentModel');

        // T120576
        $form->setSubmitTextMsg('changecontentmodel-submit');
    }

    public function validateTitle($title)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    protected function getFormFields()
    {
        $fields = [
            'pagetitle' => [
                'type' => 'title',
                'creatable' => true,
                'name' => 'pagetitle',
                'default' => $this->par,
                'label-message' => 'changecontentmodel-title-label',
                'validation-callback' => [ $this, 'validateTitle' ],
            ],
        ];
        if ($this->title) {
            $options = $this->getOptionsForTitle($this->title);
            if (empty($options)) {
                throw new ErrorPageError(
                    'changecontentmodel-emptymodels-title',
                    'changecontentmodel-emptymodels-text',
                    $this->title->getPrefixedText()
                );
            }
            $fields['pagetitle']['readonly'] = true;
            $fields += [
                'model' => [
                    'type' => 'select',
                    'name' => 'model',
                    'options' => $options,
                    'label-message' => 'changecontentmodel-model-label'
                ],
                'reason' => [
                    'type' => 'text',
                    'name' => 'reason',
                    'validation-callback' => function ($reason) {
                        $match = EditPage::matchSummarySpamRegex($reason);
                        if ($match) {
                            return $this->msg('spamprotectionmatch', $match)->parse();
                        }

                        return true;
                    },
                    'label-message' => 'changecontentmodel-reason-label',
                ],
            ];
        }

        return $fields;
    }

    private function getOptionsForTitle(Title $title = null)
    {
        $models = ContentHandler::getContentModels();
        $options = [];
        foreach ($models as $model) {
            $handler = ContentHandler::getForModelID($model);
            if (!$handler->supportsDirectEditing()) {
                continue;
            }
            if ($title) {
                if ($title->getContentModel() === $model) {
                    continue;
                }
                if (!$handler->canBeUsedOn($title)) {
                    continue;
                }
            }
            $options[ContentHandler::getLocalizedName($model)] = $model;
        }

        return $options;
    }

    public function onSubmit(array $data)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function onSuccess()
    {
        $out = $this->getOutput();
        $out->setPageTitle($this->msg('changecontentmodel-success-title'));
        $out->addWikiMsg('changecontentmodel-success-text', $this->title);
    }

    /**
     * Return an array of subpages beginning with $search that this special page will accept.
     *
     * @param string $search Prefix to search for
     * @param int $limit Maximum number of results to return (usually 10)
     * @param int $offset Number of results to skip (usually 0)
     * @return string[] Matching subpages
     */
    public function prefixSearchSubpages($search, $limit, $offset)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    protected function getGroupName()
    {
        return 'pagetools';
    }
}
