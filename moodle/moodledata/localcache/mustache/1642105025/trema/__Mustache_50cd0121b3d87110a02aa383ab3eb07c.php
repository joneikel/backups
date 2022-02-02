<?php

class __Mustache_50cd0121b3d87110a02aa383ab3eb07c extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<tr data-prediction-id="';
        $value = $this->resolveValue($context->find('predictionid'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '" class="d-flex">
';
        $buffer .= $indent . '    <td class="insight-checkbox-cell col-1';
        // 'bulkactions' inverted section
        $value = $context->find('bulkactions');
        if (empty($value)) {
            
            $buffer .= ' hidden';
        }
        $buffer .= '">
';
        $buffer .= $indent . '        ';
        $value = $this->resolveValue($context->find('toggleslave'), $context);
        $buffer .= $value;
        $buffer .= '
';
        $buffer .= $indent . '    </td>
';
        $buffer .= $indent . '    <td class="col-8">
';
        // 'sampleimage' section
        $value = $context->find('sampleimage');
        $buffer .= $this->section88c02851fa57805522e9ba87cf2d5d0e($context, $indent, $value);
        $buffer .= $indent . '        ';
        $value = $this->resolveValue($context->find('sampledescription'), $context);
        $buffer .= $value;
        $buffer .= '
';
        $buffer .= $indent . '    </td>
';
        $buffer .= $indent . '    <td class="col-3';
        // 'actions' inverted section
        $value = $context->find('actions');
        if (empty($value)) {
            
            $buffer .= ' hidden';
        }
        $buffer .= '">
';
        // 'actions' section
        $value = $context->find('actions');
        $buffer .= $this->section2c1699366ef14b58379cf2c8815ac940($context, $indent, $value);
        $buffer .= $indent . '    </td>
';
        $buffer .= $indent . '</tr>
';

        return $buffer;
    }

    private function section88c02851fa57805522e9ba87cf2d5d0e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            {{{sampleimage}}}
        ';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            ';
                $value = $this->resolveValue($context->find('sampleimage'), $context);
                $buffer .= $value;
                $buffer .= '
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section2c1699366ef14b58379cf2c8815ac940(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        {{> core/action_menu}}
    ';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                if ($partial = $this->mustache->loadPartial('core/action_menu')) {
                    $buffer .= $partial->renderInternal($context, $indent . '        ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
