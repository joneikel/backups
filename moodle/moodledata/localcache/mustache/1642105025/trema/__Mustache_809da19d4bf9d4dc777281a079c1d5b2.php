<?php

class __Mustache_809da19d4bf9d4dc777281a079c1d5b2 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div class="server_last_24_hours_usage has-loader">
';
        $buffer .= $indent . '    <div class="server_usage_chart">
';
        // 'hasdates' section
        $value = $context->find('hasdates');
        $buffer .= $this->section4febb0604962653c5fcaf95d02df4e7b($context, $indent, $value);
        $buffer .= $indent . '        <canvas class="esm_usage_chart" id="esm_usage_chart"></canvas>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '    <div class="cannot_display_server_usage">
';
        $buffer .= $indent . '        <label>';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->section25cd6ae6b38ae50b59aa6c8774d16637($context, $indent, $value);
        $buffer .= '</label>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '    <div class="edwiser-server-monitor-loader">
';
        $buffer .= $indent . '        <div class="edwiser-server-monitor-loading-icon">
';
        $buffer .= $indent . '            <i class="fa fa-circle-o-notch fa-spin fa-fw" aria-hidden="true"></i>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '</div>
';

        return $buffer;
    }

    private function section2e39d03fe1cf52f00f9f9e06a5c0c462(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <option value="{{stamp}}" {{selected}}>{{date}}</option>
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
                
                $buffer .= $indent . '                <option value="';
                $value = $this->resolveValue($context->find('stamp'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" ';
                $value = $this->resolveValue($context->find('selected'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '>';
                $value = $this->resolveValue($context->find('date'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</option>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section4febb0604962653c5fcaf95d02df4e7b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <select class=\'form-control\' id=\'esm_usage_date_selector\'>
            {{#dates}}
                <option value="{{stamp}}" {{selected}}>{{date}}</option>
            {{/dates}}
        </select>
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
                
                $buffer .= $indent . '        <select class=\'form-control\' id=\'esm_usage_date_selector\'>
';
                // 'dates' section
                $value = $context->find('dates');
                $buffer .= $this->section2e39d03fe1cf52f00f9f9e06a5c0c462($context, $indent, $value);
                $buffer .= $indent . '        </select>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section25cd6ae6b38ae50b59aa6c8774d16637(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' cannotshowonsidebar, block_edwiser_site_monitor ';
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
                
                $buffer .= ' cannotshowonsidebar, block_edwiser_site_monitor ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
