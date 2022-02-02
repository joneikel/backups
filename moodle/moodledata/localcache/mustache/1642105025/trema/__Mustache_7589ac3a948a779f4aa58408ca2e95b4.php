<?php

class __Mustache_7589ac3a948a779f4aa58408ca2e95b4 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        if ($partial = $this->mustache->loadPartial('theme_boost/head')) {
            $buffer .= $partial->renderInternal($context);
        }
        $buffer .= $indent . '
';
        $buffer .= $indent . '<body ';
        $value = $this->resolveValue($context->find('bodyattributes'), $context);
        $buffer .= $value;
        $buffer .= '>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '<div id="page-wrapper">
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    ';
        $value = $this->resolveValue($context->findDot('output.standard_top_of_body_html'), $context);
        $buffer .= $value;
        $buffer .= '
';
        $buffer .= $indent . '
';
        if ($partial = $this->mustache->loadPartial('theme_trema/navbar')) {
            $buffer .= $partial->renderInternal($context, $indent . '    ');
        }
        $buffer .= $indent . '
';
        $buffer .= $indent . '    <div id="page" class="container-fluid">
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '        <div id="carouselTrema" class="carousel slide carousel-fade ';
        // 'frontpagecarrousel' inverted section
        $value = $context->find('frontpagecarrousel');
        if (empty($value)) {
            
            $buffer .= 'd-none';
        }
        $buffer .= '" data-ride="carousel">
';
        $buffer .= $indent . '                <div class="carousel-inner" data-interval="false">
';
        $buffer .= $indent . '                    <ol class="carousel-indicators">
';
        // 'frontpagecarrousel' section
        $value = $context->find('frontpagecarrousel');
        $buffer .= $this->sectionF0661ddbd1a767b454f32beb05c2cb3e($context, $indent, $value);
        $buffer .= $indent . '                    </ol>
';
        // 'frontpagecarrousel' section
        $value = $context->find('frontpagecarrousel');
        $buffer .= $this->section3caced5acaa99a4ced9ed6b024fa7ab3($context, $indent, $value);
        $buffer .= $indent . '                    <a class="carousel-control-prev" href="#carouselTrema" role="button" data-slide="prev">
';
        $buffer .= $indent . '                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
';
        $buffer .= $indent . '                        <span class="sr-only">Previous</span>
';
        $buffer .= $indent . '                    </a>
';
        $buffer .= $indent . '                    <a class="carousel-control-next" href="#carouselTrema" role="button" data-slide="next">
';
        $buffer .= $indent . '                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
';
        $buffer .= $indent . '                        <span class="sr-only">Next</span>
';
        $buffer .= $indent . '                    </a>
';
        $buffer .= $indent . '                </div>
';
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '
';
        // 'frontpagecarrousel' inverted section
        $value = $context->find('frontpagecarrousel');
        if (empty($value)) {
            
            $buffer .= $indent . '        <div id="frontpage-banner">
';
            $buffer .= $indent . '            <div id="frontpage-banner-content">
';
            $buffer .= $indent . '	            <h2 class="pb-4 pl-3 mb-3">';
            $value = $this->resolveValue($context->find('frontpagetitle'), $context);
            $buffer .= $value;
            $buffer .= '</h2>
';
            $buffer .= $indent . '	            <h3 class="mb-3">';
            $value = $this->resolveValue($context->find('frontpagesubtitle'), $context);
            $buffer .= $value;
            $buffer .= '</h3>
';
            $buffer .= $indent . '	            <a href="';
            $value = $this->resolveValue($context->find('frontpagebuttonhref'), $context);
            $buffer .= call_user_func($this->mustache->getEscape(), $value);
            $buffer .= '" class="m-3 btn ';
            $value = $this->resolveValue($context->find('frontpagebuttonclass'), $context);
            $buffer .= call_user_func($this->mustache->getEscape(), $value);
            $buffer .= '" role="button">';
            $value = $this->resolveValue($context->find('frontpagebuttontext'), $context);
            $buffer .= call_user_func($this->mustache->getEscape(), $value);
            $buffer .= '</a>
';
            $buffer .= $indent . '            </div>
';
            $buffer .= $indent . '            ';
            $value = $this->resolveValue($context->findDot('output.frontpage_settings_menu'), $context);
            $buffer .= $value;
            $buffer .= '
';
            $buffer .= $indent . '        </div>
';
        }
        $buffer .= $indent . '
';
        // 'hascards' section
        $value = $context->find('hascards');
        $buffer .= $this->section2ae66fedd7e4468b050724a21ddff326($context, $indent, $value);
        $buffer .= $indent . '
';
        $buffer .= $indent . '        <div id="page-content" class="container p-0 mb-5">
';
        $buffer .= $indent . '            <div id="region-main-box" class="row col-12 p-0">
';
        // 'hasregionmainsettingsmenu' section
        $value = $context->find('hasregionmainsettingsmenu');
        $buffer .= $this->section06185a8fbd36fbf8b70e542995872ba7($context, $indent, $value);
        $buffer .= $indent . '                <section id="region-main" ';
        // 'hasblocks' section
        $value = $context->find('hasblocks');
        $buffer .= $this->section1070627cc6d04a30fbc9aa223e9e57ed($context, $indent, $value);
        $buffer .= '>
';
        // 'hasregionmainsettingsmenu' section
        $value = $context->find('hasregionmainsettingsmenu');
        $buffer .= $this->section0f1248da1efcc1dd90eeae9abae2980e($context, $indent, $value);
        $buffer .= $indent . '                    <div id="defaultfrontpagebody" class="mb-4">
';
        $buffer .= $indent . '                        ';
        $value = $this->resolveValue($context->find('defaultfrontpagebody'), $context);
        $buffer .= $value;
        $buffer .= '
';
        $buffer .= $indent . '                    </div>
';
        $buffer .= $indent . '                    ';
        $value = $this->resolveValue($context->findDot('output.course_content_header'), $context);
        $buffer .= $value;
        $buffer .= '
';
        $buffer .= $indent . '                    ';
        $value = $this->resolveValue($context->findDot('output.main_content'), $context);
        $buffer .= $value;
        $buffer .= '
';
        $buffer .= $indent . '                    ';
        $value = $this->resolveValue($context->findDot('output.activity_navigation'), $context);
        $buffer .= $value;
        $buffer .= '
';
        $buffer .= $indent . '                    ';
        $value = $this->resolveValue($context->findDot('output.course_content_footer'), $context);
        $buffer .= $value;
        $buffer .= '
';
        $buffer .= $indent . '
';
        // 'hasblocks' section
        $value = $context->find('hasblocks');
        $buffer .= $this->sectionEb9307c5055d0635eb05e478f93775ce($context, $indent, $value);
        $buffer .= $indent . '                </section>
';
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '    ';
        $value = $this->resolveValue($context->findDot('output.standard_after_main_region_html'), $context);
        $buffer .= $value;
        $buffer .= '
';
        if ($partial = $this->mustache->loadPartial('theme_boost/nav-drawer')) {
            $buffer .= $partial->renderInternal($context, $indent . '    ');
        }
        // 'hasadminblocks' section
        $value = $context->find('hasadminblocks');
        $buffer .= $this->section4e94c947dcb2bdb97f16299cd321b49a($context, $indent, $value);
        $buffer .= $indent . '
';
        if ($partial = $this->mustache->loadPartial('theme_trema/footer')) {
            $buffer .= $partial->renderInternal($context, $indent . '    ');
        }
        $buffer .= $indent . '</div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '</body>
';
        $buffer .= $indent . '</html>
';
        // 'js' section
        $value = $context->find('js');
        $buffer .= $this->sectionCccf505165b5a98bc8bb6d92bccc8d70($context, $indent, $value);

        return $buffer;
    }

    private function sectionF0661ddbd1a767b454f32beb05c2cb3e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                            <li data-target="#carouselTrema" data-slide-to="{{index}}" class="{{active}}"></li>
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
                
                $buffer .= $indent . '                            <li data-target="#carouselTrema" data-slide-to="';
                $value = $this->resolveValue($context->find('index'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" class="';
                $value = $this->resolveValue($context->find('active'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '"></li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section03a7f2fbf3a13e9b20818712ef224e30(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '<h2 class="pb-4 pl-3 mb-3">{{title}}</h2>';
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
                
                $buffer .= '<h2 class="pb-4 pl-3 mb-3">';
                $value = $this->resolveValue($context->find('title'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</h2>';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE1a9c38b0ee7d79533a29e2b70b77f71(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '<h3 class="mb-3 d-none d-md-block">{{subtitle}}</h3>';
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
                
                $buffer .= '<h3 class="mb-3 d-none d-md-block">';
                $value = $this->resolveValue($context->find('subtitle'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</h3>';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section8f05e34ba39713fabe836cdb68a984e3(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '<a href="{{btnhref}}" class="m-3 btn d-none d-md-inline-block {{btnclass}}" role="button">{{btntext}}</a>';
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
                
                $buffer .= '<a href="';
                $value = $this->resolveValue($context->find('btnhref'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" class="m-3 btn d-none d-md-inline-block ';
                $value = $this->resolveValue($context->find('btnclass'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" role="button">';
                $value = $this->resolveValue($context->find('btntext'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</a>';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section3caced5acaa99a4ced9ed6b024fa7ab3(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    <div class="carousel-item {{active}}">
                        <img src="{{image}}" class="d-block w-100" alt="{{title}}">
                        <div class="frontpage-banner-content">
                            {{#title}}<h2 class="pb-4 pl-3 mb-3">{{title}}</h2>{{/title}}
                            {{#subtitle}}<h3 class="mb-3 d-none d-md-block">{{subtitle}}</h3>{{/subtitle}}
                            {{#btnhref}}<a href="{{btnhref}}" class="m-3 btn d-none d-md-inline-block {{btnclass}}" role="button">{{btntext}}</a>{{/btnhref}}
                        </div>
                    </div>
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
                
                $buffer .= $indent . '                    <div class="carousel-item ';
                $value = $this->resolveValue($context->find('active'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">
';
                $buffer .= $indent . '                        <img src="';
                $value = $this->resolveValue($context->find('image'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" class="d-block w-100" alt="';
                $value = $this->resolveValue($context->find('title'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">
';
                $buffer .= $indent . '                        <div class="frontpage-banner-content">
';
                $buffer .= $indent . '                            ';
                // 'title' section
                $value = $context->find('title');
                $buffer .= $this->section03a7f2fbf3a13e9b20818712ef224e30($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '                            ';
                // 'subtitle' section
                $value = $context->find('subtitle');
                $buffer .= $this->sectionE1a9c38b0ee7d79533a29e2b70b77f71($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '                            ';
                // 'btnhref' section
                $value = $context->find('btnhref');
                $buffer .= $this->section8f05e34ba39713fabe836cdb68a984e3($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '                        </div>
';
                $buffer .= $indent . '                    </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionA53ae97108302af8fb5550bfe73ba8dd(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '<a href="{{cardlink}}">';
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
                
                $buffer .= '<a href="';
                $value = $this->resolveValue($context->find('cardlink'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section3ae39e3dce9945d5872a2a828daa4528(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '</a>';
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
                
                $buffer .= '</a>';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionA4151405b7afb92d510b1dea5a88bc95(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <div class="frontpage-card col-sm-6 p-4 text-center">
                    {{#cardlink}}<a href="{{cardlink}}">{{/cardlink}}<span class="fa {{cardicon}} fa-4x" style="color: {{cardiconcolor}};"></span>{{#cardlink}}</a>{{/cardlink}}
                    {{#cardlink}}<a href="{{cardlink}}">{{/cardlink}}<h3>{{cardtitle}}</h3>{{#cardlink}}</a>{{/cardlink}}
                    <p class="font-weight-light">{{cardsubtitle}}</p>
                </div>
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
                
                $buffer .= $indent . '            <div class="frontpage-card col-sm-6 p-4 text-center">
';
                $buffer .= $indent . '                    ';
                // 'cardlink' section
                $value = $context->find('cardlink');
                $buffer .= $this->sectionA53ae97108302af8fb5550bfe73ba8dd($context, $indent, $value);
                $buffer .= '<span class="fa ';
                $value = $this->resolveValue($context->find('cardicon'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= ' fa-4x" style="color: ';
                $value = $this->resolveValue($context->find('cardiconcolor'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= ';"></span>';
                // 'cardlink' section
                $value = $context->find('cardlink');
                $buffer .= $this->section3ae39e3dce9945d5872a2a828daa4528($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '                    ';
                // 'cardlink' section
                $value = $context->find('cardlink');
                $buffer .= $this->sectionA53ae97108302af8fb5550bfe73ba8dd($context, $indent, $value);
                $buffer .= '<h3>';
                $value = $this->resolveValue($context->find('cardtitle'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</h3>';
                // 'cardlink' section
                $value = $context->find('cardlink');
                $buffer .= $this->section3ae39e3dce9945d5872a2a828daa4528($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '                    <p class="font-weight-light">';
                $value = $this->resolveValue($context->find('cardsubtitle'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</p>
';
                $buffer .= $indent . '                </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section2ae66fedd7e4468b050724a21ddff326(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <div id="frontpage-cards" class="container mt-5">

            <div id="frontpage-cards-title" class="row mx-3 p-4 pt-0 text-center">
                <div class="col-12 pt-3 pb-3">
                    <h2 class="border-bottom p-3 m-2 mb-4">{{{cardstitle}}}</h2>
                    <p class="font-weight-light">
                        {{{cardssubtitle}}}
                    </p>
                </div>
            </div>

            <div id="frontpage-cards-content" class="row">
            {{#cardssettings}}
            <div class="frontpage-card col-sm-6 p-4 text-center">
                    {{#cardlink}}<a href="{{cardlink}}">{{/cardlink}}<span class="fa {{cardicon}} fa-4x" style="color: {{cardiconcolor}};"></span>{{#cardlink}}</a>{{/cardlink}}
                    {{#cardlink}}<a href="{{cardlink}}">{{/cardlink}}<h3>{{cardtitle}}</h3>{{#cardlink}}</a>{{/cardlink}}
                    <p class="font-weight-light">{{cardsubtitle}}</p>
                </div>
                {{/cardssettings}}
            </div>
        </div>
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
                
                $buffer .= $indent . '        <div id="frontpage-cards" class="container mt-5">
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '            <div id="frontpage-cards-title" class="row mx-3 p-4 pt-0 text-center">
';
                $buffer .= $indent . '                <div class="col-12 pt-3 pb-3">
';
                $buffer .= $indent . '                    <h2 class="border-bottom p-3 m-2 mb-4">';
                $value = $this->resolveValue($context->find('cardstitle'), $context);
                $buffer .= $value;
                $buffer .= '</h2>
';
                $buffer .= $indent . '                    <p class="font-weight-light">
';
                $buffer .= $indent . '                        ';
                $value = $this->resolveValue($context->find('cardssubtitle'), $context);
                $buffer .= $value;
                $buffer .= '
';
                $buffer .= $indent . '                    </p>
';
                $buffer .= $indent . '                </div>
';
                $buffer .= $indent . '            </div>
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '            <div id="frontpage-cards-content" class="row">
';
                // 'cardssettings' section
                $value = $context->find('cardssettings');
                $buffer .= $this->sectionA4151405b7afb92d510b1dea5a88bc95($context, $indent, $value);
                $buffer .= $indent . '            </div>
';
                $buffer .= $indent . '        </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section8ae768dbd9f60a7f7df4aaf3cee7aa89(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'has-blocks';
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
                
                $buffer .= 'has-blocks';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section06185a8fbd36fbf8b70e542995872ba7(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <div id="region-main-settings-menu" class="d-print-none {{#hasblocks}}has-blocks{{/hasblocks}}">
                    <div> {{{ output.region_main_settings_menu }}} </div>
                </div>
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
                
                $buffer .= $indent . '                <div id="region-main-settings-menu" class="d-print-none ';
                // 'hasblocks' section
                $value = $context->find('hasblocks');
                $buffer .= $this->section8ae768dbd9f60a7f7df4aaf3cee7aa89($context, $indent, $value);
                $buffer .= '">
';
                $buffer .= $indent . '                    <div> ';
                $value = $this->resolveValue($context->findDot('output.region_main_settings_menu'), $context);
                $buffer .= $value;
                $buffer .= ' </div>
';
                $buffer .= $indent . '                </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section1070627cc6d04a30fbc9aa223e9e57ed(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'class="has-blocks"';
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
                
                $buffer .= 'class="has-blocks"';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section0f1248da1efcc1dd90eeae9abae2980e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                        <div class="region_main_settings_menu_proxy"></div>
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
                
                $buffer .= $indent . '                        <div class="region_main_settings_menu_proxy"></div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionEb9307c5055d0635eb05e478f93775ce(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    <div data-region="blocks-frontpage" class="d-print-none">
                        {{{ sidepreblocks }}}
                    </div>
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
                
                $buffer .= $indent . '                    <div data-region="blocks-frontpage" class="d-print-none">
';
                $buffer .= $indent . '                        ';
                $value = $this->resolveValue($context->find('sidepreblocks'), $context);
                $buffer .= $value;
                $buffer .= '
';
                $buffer .= $indent . '                    </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB4d86a34e4c20935294a2d3beeea1066(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'adminarea, theme_trema';
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
                
                $buffer .= 'adminarea, theme_trema';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section4e94c947dcb2bdb97f16299cd321b49a(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <div id="side-admin-blocks">
            <div class="container py-3">
                <h3 class="text-center my-2">{{#str}}adminarea, theme_trema{{/str}}</h3>
                {{{ sideadminblocks }}}
            </div>
        </div>
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
                
                $buffer .= $indent . '        <div id="side-admin-blocks">
';
                $buffer .= $indent . '            <div class="container py-3">
';
                $buffer .= $indent . '                <h3 class="text-center my-2">';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->sectionB4d86a34e4c20935294a2d3beeea1066($context, $indent, $value);
                $buffer .= '</h3>
';
                $buffer .= $indent . '                ';
                $value = $this->resolveValue($context->find('sideadminblocks'), $context);
                $buffer .= $value;
                $buffer .= '
';
                $buffer .= $indent . '            </div>
';
                $buffer .= $indent . '        </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionCccf505165b5a98bc8bb6d92bccc8d70(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
M.util.js_pending(\'theme_boost/loader\');
require([\'theme_boost/loader\'], function() {
    M.util.js_complete(\'theme_boost/loader\');
});

M.util.js_pending(\'theme_boost/drawer\');
require([\'theme_boost/drawer\'], function(drawer) {
    drawer.init();
    M.util.js_complete(\'theme_boost/drawer\');
});
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
                
                $buffer .= $indent . 'M.util.js_pending(\'theme_boost/loader\');
';
                $buffer .= $indent . 'require([\'theme_boost/loader\'], function() {
';
                $buffer .= $indent . '    M.util.js_complete(\'theme_boost/loader\');
';
                $buffer .= $indent . '});
';
                $buffer .= $indent . '
';
                $buffer .= $indent . 'M.util.js_pending(\'theme_boost/drawer\');
';
                $buffer .= $indent . 'require([\'theme_boost/drawer\'], function(drawer) {
';
                $buffer .= $indent . '    drawer.init();
';
                $buffer .= $indent . '    M.util.js_complete(\'theme_boost/drawer\');
';
                $buffer .= $indent . '});
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
