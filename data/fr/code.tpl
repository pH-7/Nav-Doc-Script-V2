<h1>Syntaxe de code dans votre doc</h1>
<h3>Vous pouvez aussi appliquer la syntaxe colorisée de la plupart des langages de programmation</h3>

<p class="italic underline">Example:</p>

<pre>
<code class="php">
class MyClass
{
    const MY_CONSTANT = 'abcd';

    /**
     * @param string $sVal
     * @return string Returns If the $sVal parameter is "abcd", returns "abcd", otherwise "zyxw".
     */
    public function myMethod($sVal)
    {
        if ($sVal == 'abcd')
            return 'abcd';
        else
            return 'zyxw';
    }

}
</code>