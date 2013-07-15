jQuery(function($$){
    var $container = jQuery('#hdLayoutBuilder').parent().clone();
    var $optionsContainer = jQuery('#options');
    $optionsContainer.empty();
    $container.appendTo($optionsContainer);
    $container.css('margin-left', 0);

    $$(window).bind('load', function(){
        $$('#myTabTabs li').eq(1).one('click', function(){
            // wait a bit to init layoutbuilder
            setTimeout(function(){
                window.workSpace = new WorkSpace();

                workSpace.getLayoutHtml('homepage', function(layoutHtml){
                    workSpace.setBodyHtmlContent(layoutHtml);
                    workSpace.set('components', generateComponentList());
                    workSpace.generateComponentList();
                });
            }, 500);
        });
    });

    $$('#btSaveLayout').on('click', function(){
        workSpace.saveLayout();
        return false;
    });
});

// TODO: Thêm các thể loại component khác
var generateComponentList = function() {
    var componentList = new ComponentList();
    componentList.add(new Component({id: 'header', name: 'Header', html: '<h1 data-zo2selectable="true">Header</h1>'}));
    componentList.add(new Component({id: 'link', name: 'Link', html: '<a data-zo2selectable="true" href="#">Link</a>'}));
    componentList.add(new Component({id: 'paragraph', name: 'Paragraph', html: '<p data-zo2selectable="true">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>'}));
    componentList.add(new Component({id: 'unorderedlist', name: 'Unordered List', html: '<ul data-zo2selectable="true"><li>Item 1</li><li>Item 2</li></ul>'}));
    componentList.add(new Component({id: 'orderedlist', name: 'Ordered List', html: '<ol data-zo2selectable="true"><li>Item 1</li><li>Item 2</li></ol>'}));
    componentList.add(new Component({id: 'linkbutton', name: 'Link Button', html: '<a data-zo2selectable="true" class="btn">Header</a>'}));
    componentList.add(new Component({id: 'toparticle', name: 'Top Article', html: '<div class="" data-zo2selectable="true" data-zo2componenttype="data-component" data-zo2componentid="toparticle"></div>'}));
    return componentList;
};