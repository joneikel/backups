<?php

class __Mustache_d17c5a230accfb098b55921bd8887a5d extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<!-- Begin HTML generated from results_choice template. -->
';
        // 'responses.0' section
        $value = $context->findDot('responses.0');
        $buffer .= $this->sectionE680d4e68b9bb91b6f3d29480d2ed989($context, $indent, $value);
        // 'responses' section
        $value = $context->find('responses');
        $buffer .= $this->sectionAd7bfc4464d33ed705e35b0447de4594($context, $indent, $value);
        // 'total' section
        $value = $context->find('total');
        $buffer .= $this->section173fa1380d4bc0967ee0b74eb2cf4d77($context, $indent, $value);
        // 'responses.0' section
        $value = $context->findDot('responses.0');
        $buffer .= $this->section894b86197a3f0314cc88cf604281b3b1($context, $indent, $value);
        // 'responses' inverted section
        $value = $context->find('responses');
        if (empty($value)) {
            
            $buffer .= $indent . '    <p class="generaltable">&nbsp;';
            // 'str' section
            $value = $context->find('str');
            $buffer .= $this->sectionE48dd7e223a1807b1512d7450ee92d6e($context, $indent, $value);
            $buffer .= '</p>
';
        }
        $buffer .= $indent . '<!-- End HTML generated from results_choice template. -->';

        return $buffer;
    }

    private function section4198e9115776db0597d221b379396960(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' response, mod_questionnaire ';
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
                
                $buffer .= ' response, mod_questionnaire ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section273d2c73b397c2d746df43f7563d6a8f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' average, mod_questionnaire ';
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
                
                $buffer .= ' average, mod_questionnaire ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section97da46a86a59abebd3a9959f7e403b7f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' total, mod_questionnaire ';
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
                
                $buffer .= ' total, mod_questionnaire ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE680d4e68b9bb91b6f3d29480d2ed989(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
<table class="generaltable">
    <thead>
    <tr>
        <th class="header c0" style="text-align:left;width:50%;" scope="col">{{#str}} response, mod_questionnaire {{/str}}</th>
        <th class="header c1" style="text-align:left;width:40%;" scope="col">{{#str}} average, mod_questionnaire {{/str}}</th>
        <th class="header c2 lastcol" style="text-align:right;width:10%;" scope="col">{{#str}} total, mod_questionnaire {{/str}}</th>
    </tr>
    </thead>
    <tbody>
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
                
                $buffer .= $indent . '<table class="generaltable">
';
                $buffer .= $indent . '    <thead>
';
                $buffer .= $indent . '    <tr>
';
                $buffer .= $indent . '        <th class="header c0" style="text-align:left;width:50%;" scope="col">';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section4198e9115776db0597d221b379396960($context, $indent, $value);
                $buffer .= '</th>
';
                $buffer .= $indent . '        <th class="header c1" style="text-align:left;width:40%;" scope="col">';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section273d2c73b397c2d746df43f7563d6a8f($context, $indent, $value);
                $buffer .= '</th>
';
                $buffer .= $indent . '        <th class="header c2 lastcol" style="text-align:right;width:10%;" scope="col">';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section97da46a86a59abebd3a9959f7e403b7f($context, $indent, $value);
                $buffer .= '</th>
';
                $buffer .= $indent . '    </tr>
';
                $buffer .= $indent . '    </thead>
';
                $buffer .= $indent . '    <tbody>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section7fda914231b9d1b85bdcca687777abe6(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <tr class="">
        <td class="cell c0" style="text-align:left;width:50%;">{{response.text}}</td>
        <td class="cell c1" style="text-align:left;width:40%;white-space:nowrap;">
            <img style="height:9px; width:4px;" alt="{{response.alt1}}" src="{{response.image1}}" /><img style="height:9px; width:{{response.width2}}px;" alt="{{response.alt2}}" src="{{response.image2}}" /><img style="height:9px; width:4px;" alt="{{response.alt3}}" src="{{response.image3}}" />
            {{{response.percent}}}
        </td>
        <td class="cell c2 lastcol" style="text-align:right;width:10%;">{{response.total}}</td>
    </tr>
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
                
                $buffer .= $indent . '    <tr class="">
';
                $buffer .= $indent . '        <td class="cell c0" style="text-align:left;width:50%;">';
                $value = $this->resolveValue($context->findDot('response.text'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</td>
';
                $buffer .= $indent . '        <td class="cell c1" style="text-align:left;width:40%;white-space:nowrap;">
';
                $buffer .= $indent . '            <img style="height:9px; width:4px;" alt="';
                $value = $this->resolveValue($context->findDot('response.alt1'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" src="';
                $value = $this->resolveValue($context->findDot('response.image1'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" /><img style="height:9px; width:';
                $value = $this->resolveValue($context->findDot('response.width2'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= 'px;" alt="';
                $value = $this->resolveValue($context->findDot('response.alt2'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" src="';
                $value = $this->resolveValue($context->findDot('response.image2'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" /><img style="height:9px; width:4px;" alt="';
                $value = $this->resolveValue($context->findDot('response.alt3'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" src="';
                $value = $this->resolveValue($context->findDot('response.image3'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" />
';
                $buffer .= $indent . '            ';
                $value = $this->resolveValue($context->findDot('response.percent'), $context);
                $buffer .= $value;
                $buffer .= '
';
                $buffer .= $indent . '        </td>
';
                $buffer .= $indent . '        <td class="cell c2 lastcol" style="text-align:right;width:10%;">';
                $value = $this->resolveValue($context->findDot('response.total'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</td>
';
                $buffer .= $indent . '    </tr>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionAd7bfc4464d33ed705e35b0447de4594(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    {{#response}}
    <tr class="">
        <td class="cell c0" style="text-align:left;width:50%;">{{response.text}}</td>
        <td class="cell c1" style="text-align:left;width:40%;white-space:nowrap;">
            <img style="height:9px; width:4px;" alt="{{response.alt1}}" src="{{response.image1}}" /><img style="height:9px; width:{{response.width2}}px;" alt="{{response.alt2}}" src="{{response.image2}}" /><img style="height:9px; width:4px;" alt="{{response.alt3}}" src="{{response.image3}}" />
            {{{response.percent}}}
        </td>
        <td class="cell c2 lastcol" style="text-align:right;width:10%;">{{response.total}}</td>
    </tr>
    {{/response}}
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
                
                // 'response' section
                $value = $context->find('response');
                $buffer .= $this->section7fda914231b9d1b85bdcca687777abe6($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section7e04a6ed1b59bd7adc2a78e508c300a1(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' totalresponses, mod_questionnaire';
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
                
                $buffer .= ' totalresponses, mod_questionnaire';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section173fa1380d4bc0967ee0b74eb2cf4d77(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <tr>
        <td colspan="3"><div class="tabledivider"></div></td>
    </tr>
    <tr class="lastrow">
        <td class="cell c0" style="text-align:left;width:50%;">{{#str}} totalresponses, mod_questionnaire{{/str}}</td>
        <td class="cell c1" style="text-align:left;width:40%;white-space:nowrap;">
            <img style="height:9px; width:4px;" alt="{{alt1}}" src="{{image1}}" /><img style="height:9px; width:{{width2}}px;" alt="{{alt2}}" src="{{image2}}" /><img style="height:9px; width:4px;" alt="{{alt3}}" src="{{image3}}" />
            {{{percent}}}
        </td>
        <td class="cell c2 lastcol" style="text-align:right;width:10%;">{{total}}</td>
    </tr>
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
                
                $buffer .= $indent . '    <tr>
';
                $buffer .= $indent . '        <td colspan="3"><div class="tabledivider"></div></td>
';
                $buffer .= $indent . '    </tr>
';
                $buffer .= $indent . '    <tr class="lastrow">
';
                $buffer .= $indent . '        <td class="cell c0" style="text-align:left;width:50%;">';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section7e04a6ed1b59bd7adc2a78e508c300a1($context, $indent, $value);
                $buffer .= '</td>
';
                $buffer .= $indent . '        <td class="cell c1" style="text-align:left;width:40%;white-space:nowrap;">
';
                $buffer .= $indent . '            <img style="height:9px; width:4px;" alt="';
                $value = $this->resolveValue($context->find('alt1'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" src="';
                $value = $this->resolveValue($context->find('image1'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" /><img style="height:9px; width:';
                $value = $this->resolveValue($context->find('width2'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= 'px;" alt="';
                $value = $this->resolveValue($context->find('alt2'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" src="';
                $value = $this->resolveValue($context->find('image2'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" /><img style="height:9px; width:4px;" alt="';
                $value = $this->resolveValue($context->find('alt3'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" src="';
                $value = $this->resolveValue($context->find('image3'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" />
';
                $buffer .= $indent . '            ';
                $value = $this->resolveValue($context->find('percent'), $context);
                $buffer .= $value;
                $buffer .= '
';
                $buffer .= $indent . '        </td>
';
                $buffer .= $indent . '        <td class="cell c2 lastcol" style="text-align:right;width:10%;">';
                $value = $this->resolveValue($context->find('total'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</td>
';
                $buffer .= $indent . '    </tr>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section894b86197a3f0314cc88cf604281b3b1(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    </tbody>
</table>
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
                
                $buffer .= $indent . '    </tbody>
';
                $buffer .= $indent . '</table>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE48dd7e223a1807b1512d7450ee92d6e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' noresponsedata, questionnaire';
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
                
                $buffer .= ' noresponsedata, questionnaire';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
