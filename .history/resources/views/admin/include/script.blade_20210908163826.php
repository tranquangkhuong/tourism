<script type="text/javascript">
    $('#summernote').summernote({
          placeholder: 'Hello Bootstrap 4',
          tabsize: 2,
          height: 100
        });
</script>

<script type="text/javascript" src="{{ URL::asset('frontend/jquery/jquery.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('frontend/jquery/jquery-ui.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('frontend/backend/js/daterangepicker.js') }}"></script>

<!-- Bootstrap 4 -->
<script type="text/javascript" src="{{ URL::asset('frontend/backend/bootstrap/bootstrap4.min.js') }}"></script>

<script type="text/javascript" src="{{ URL::asset('frontend/backend/js/bootstrap4.bundle.min.js') }}"></script>
<!--  demo purposes -->
<script type="text/javascript" src="{{ URL::asset('frontend/backend/js/demo.js') }}"></script>
<!--  App -->
<script type="text/javascript" src="{{ URL::asset('frontend/backend/js/adminlte.min.js') }}"></script>
{{-- <!-- ChartJS --> --}}
<script type="text/javascript" src="{{ URL::asset('frontend/backend/js/chartJS.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('frontend/backend/js/select2.full.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('frontend/backend/js/duallistbox.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('frontend/backend/js/inputmask.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('frontend/backend/js/moment.min.js') }}"></script>
{{-- tempusdominus-bootstrap-4.min.js --}}
<script type="text/javascript" src="{{ URL::asset('frontend/backend/js/tempusdominus-bootstrap-4.min.js') }}">
</script>
<script type="text/javascript" src="{{ URL::asset('frontend/backend/js/bootstrap-switch.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('frontend/backend/js/bs-stepper.min.js') }}"></script>

<script type="text/javascript">
    !function(e,t){"object"==typeof exports&&"undefined"!=typeof module?module.exports=t():"function"==typeof
define&&define.amd?define(t):(e=e||self).bsCustomFileInput=t()}(this,function(){"use strict";var
s={CUSTOMFILE:'.custom-file
input[type="file"]',CUSTOMFILELABEL:".custom-file-label",FORM:"form",INPUT:"input"},l=function(e){if(0
<e.childNodes.length)for(var t=[].slice.call(e.childNodes),n=0;n<t.length;n++){var l=t[n];if(3!==l.nodeType)return
    l}return e},u=function(e){var
    t=e.bsCustomFileInput.defaultText,n=e.parentNode.querySelector(s.CUSTOMFILELABEL);n&&(l(n).textContent=t)},n=!!window.File,r=function(e){if(e.hasAttribute("multiple")&&n)return[].slice.call(e.files).map(function(e){return
    e.name}).join(", ");if(-1===e.value.indexOf(" fakepath"))return e.value;var t=e.value.split("\\");return
    t[t.length-1]};function d(){var e=this.parentNode.querySelector(s.CUSTOMFILELABEL);if(e){var
    t=l(e),n=r(this);n.length?t.textContent=n:u(this)}}function v(){for(var
    e=[].slice.call(this.querySelectorAll(s.INPUT)).filter(function(e){return!!e.bsCustomFileInput}),t=0,n=e.length;t<n;t++)u(e[t])}var
    p="bsCustomFileInput" ,m="reset" ,h="change" ;return{init:function(e,t){void 0===e&&(e=s.CUSTOMFILE),void
    0===t&&(t=s.FORM);for(var
    n,l,r=[].slice.call(document.querySelectorAll(e)),i=[].slice.call(document.querySelectorAll(t)),o=0,u=r.length;o<u;o++){var
    c=r[o];Object.defineProperty(c,p,{value:{defaultText:(n=void 0,n=""
    ,(l=c.parentNode.querySelector(s.CUSTOMFILELABEL))&&(n=l.textContent),n)},writable:!0}),d.call(c),c.addEventListener(h,d)}for(var
    f=0,a=i.length;f<a;f++)i[f].addEventListener(m,v),Object.defineProperty(i[f],p,{value:!0,writable:!0})},destroy:function(){for(var
    e=[].slice.call(document.querySelectorAll(s.FORM)).filter(function(e){return!!e.bsCustomFileInput}),t=[].slice.call(document.querySelectorAll(s.INPUT)).filter(function(e){return!!e.bsCustomFileInput}),n=0,l=t.length;n<l;n++){var
    r=t[n];u(r),r[p]=void 0,r.removeEventListener(h,d)}for(var
    i=0,o=e.length;i<o;i++)e[i].removeEventListener(m,v),e[i][p]=void 0}}});
</script>
