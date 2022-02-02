<?php

class __Mustache_ae15cd0f404bba559af986fbaaaf037f extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div class="edwiser_plugins_recommendation container">
';
        // 'error' section
        $value = $context->find('error');
        $buffer .= $this->sectionF3ef3d566ac20f4674f36b10d579f0ba($context, $indent, $value);
        // 'has' section
        $value = $context->find('has');
        $buffer .= $this->section5710c74011511ff4d4227507935c4330($context, $indent, $value);
        $buffer .= $indent . '</div>
';

        return $buffer;
    }

    private function sectionF3ef3d566ac20f4674f36b10d579f0ba(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        {{error}}
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
                
                $buffer .= $indent . '        ';
                $value = $this->resolveValue($context->find('error'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionD5deab4a3af37db1068e56b249067f8c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' knowmore, block_edwiser_site_monitor ';
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
                
                $buffer .= ' knowmore, block_edwiser_site_monitor ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section4b6b2e1e7676749c99c59e61f4f21906(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <li class="recommendation-item {{cardclass}}">
          <div class="card card-shadow">
            <div class="card-header cover">
              <img class="cover-image" src="{{image}}" alt="...">
            </div>
            <div class="card-block">
              <h3 class="card-title">{{title}}</h3>
              <p class="card-text">{{description}}</p>
            </div>
            <div class="card-block">
              <a target="_blank" href="{{purchaseurl}}" class="btn esm-outline card-link">{{#str}} knowmore, block_edwiser_site_monitor {{/str}}</a>
            </div>
          </div>
        </li>
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
                
                $buffer .= $indent . '        <li class="recommendation-item ';
                $value = $this->resolveValue($context->find('cardclass'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">
';
                $buffer .= $indent . '          <div class="card card-shadow">
';
                $buffer .= $indent . '            <div class="card-header cover">
';
                $buffer .= $indent . '              <img class="cover-image" src="';
                $value = $this->resolveValue($context->find('image'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" alt="...">
';
                $buffer .= $indent . '            </div>
';
                $buffer .= $indent . '            <div class="card-block">
';
                $buffer .= $indent . '              <h3 class="card-title">';
                $value = $this->resolveValue($context->find('title'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</h3>
';
                $buffer .= $indent . '              <p class="card-text">';
                $value = $this->resolveValue($context->find('description'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</p>
';
                $buffer .= $indent . '            </div>
';
                $buffer .= $indent . '            <div class="card-block">
';
                $buffer .= $indent . '              <a target="_blank" href="';
                $value = $this->resolveValue($context->find('purchaseurl'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" class="btn esm-outline card-link">';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->sectionD5deab4a3af37db1068e56b249067f8c($context, $indent, $value);
                $buffer .= '</a>
';
                $buffer .= $indent . '            </div>
';
                $buffer .= $indent . '          </div>
';
                $buffer .= $indent . '        </li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section5710c74011511ff4d4227507935c4330(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <ul class="recommendation-list blocks row">
        {{#plugins}}
        <li class="recommendation-item {{cardclass}}">
          <div class="card card-shadow">
            <div class="card-header cover">
              <img class="cover-image" src="{{image}}" alt="...">
            </div>
            <div class="card-block">
              <h3 class="card-title">{{title}}</h3>
              <p class="card-text">{{description}}</p>
            </div>
            <div class="card-block">
              <a target="_blank" href="{{purchaseurl}}" class="btn esm-outline card-link">{{#str}} knowmore, block_edwiser_site_monitor {{/str}}</a>
            </div>
          </div>
        </li>
        {{/plugins}}
    </ul>
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
                
                $buffer .= $indent . '    <ul class="recommendation-list blocks row">
';
                // 'plugins' section
                $value = $context->find('plugins');
                $buffer .= $this->section4b6b2e1e7676749c99c59e61f4f21906($context, $indent, $value);
                $buffer .= $indent . '    </ul>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
