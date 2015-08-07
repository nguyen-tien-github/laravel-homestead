<h3 id="g2-3-1">Connect database</h3>
<ul>
<li>Open Terminal and go to your working folder
<li>Type <code>homestead ssh</code>
</ul>
<hr>
<h3 id="g2-3-3">Create one table</h3>
<ul>
<li>Using <code>cd</code> to go to your virtual folder where contains <code>public folder</code>. Example in here <code>/home/vagrant/Code/laravel</code>
<li>Type <code>php artisan make:migration [table name]</code> to create one table in <code>database/migrations</code>
<pre>php artisan make:migration sliders_table</pre>
</li>
</ul>
<hr>
<h3 id="g2-3-2">Migrate tables</h3>
<ul>
<li>Using <code>cd</code> to go to your virtual folder where contains <code>public folder</code>. Example in here <code>/home/vagrant/Code/laravel</code>
<li>Type <code>php artisan migrate</code> to migrate tables in <code>database/migrations</code>
</ul>
<hr>
