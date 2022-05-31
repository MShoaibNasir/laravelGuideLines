&lt;?php
&lt;div&gt;
    &lt;!-- It is not the man who has too little, but the man who craves more, that is poor. - Seneca --&gt;
    &lt;h1&gt;my name is {{$name}}  and your father name is {{$fatherName}} and the news is {{$news}} and the 
    
    description is :- {{$description}}
    &lt;/h1&gt;
    &lt;div&gt;
        &lt;h1 {{$attributes-&gt;merge(['class'=&gt;'dclass'])}}&gt;
hello
        &lt;/h1&gt;
    &lt;/div&gt;
&lt;/div&gt;
?&lt;