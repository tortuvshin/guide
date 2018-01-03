
<script src="/assets/plugins/editor/module.min.js"></script>
<script src="/assets/plugins/editor/hotkeys.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/3.51/jquery.form.min.js"></script>
<script src="http://rubaxa.github.io/Sortable/Sortable.js"></script>
<script src="/assets/plugins/jquery.tagsinput.min.js"></script>


<script>
     BuzzyEditorlang = {
        'lang_1': '{{ trans('updates.BuzzyEditor.lang.lang_1') }}',
        'lang_2': '{{ trans('updates.BuzzyEditor.lang.lang_2') }}',
        'lang_3': '{{ trans('updates.BuzzyEditor.lang.lang_3') }}',
        'lang_4': '{{ trans('updates.BuzzyEditor.lang.lang_4') }}',
        'lang_5': '{{ trans('updates.BuzzyEditor.lang.lang_5') }}',
        'lang_6': '{{ trans('updates.BuzzyEditor.lang.lang_6') }}',
        'lang_7': '{{ trans('updates.BuzzyEditor.lang.lang_7') }}',
        'lang_8': '{{ trans('updates.BuzzyEditor.lang.lang_8') }}',
        'lang_9': '{{ trans('updates.BuzzyEditor.lang.lang_9') }}',
        'lang_10': '{{ trans('updates.BuzzyEditor.lang.lang_10') }}',
        'lang_11': '{{ trans('updates.BuzzyEditor.lang.lang_11') }}',
        'lang_12': '{{ trans('updates.BuzzyEditor.lang.lang_12') }}',
        'errorl': '{{ trans('updates.error') }}'
    };
</script>

<script src="/assets/js/buzzyeditor.min.js"></script>
<script>
    $( document ).ready(function() {
        BuzzyEditor.init();
        BuzzyEditor.EditorInit();
        $('#tags').tagsInput({width:'auto', 'height':'auto','defaultText':'{{ trans('updates.addatag') }}',
            'minChars' : 2,
            'maxChars' : 50,
        });
    });
</script>
<script async defer src="//platform.instagram.com/{{  getcong('sitelanguage') > "" ? getcong('sitelanguage') : 'en_US' }}/embeds.js"></script>
<script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>

<div id="fb-root"></div>
<script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/{{  getcong('sitelanguage') > "" ? getcong('sitelanguage') : 'en_US' }}/sdk.js#xfbml=1&version=v2.5";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>
