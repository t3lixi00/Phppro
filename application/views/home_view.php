<p class="bg-success">
<?php if($this->session->flashdata('login_success')):?>
<?php echo $this->session->flashdata('login_success') ?>	
<?php endif; ?>
</p>

<p class="bg-danger">
<?php if($this->session->flashdata('login_failed')):?>
<?php echo $this->session->flashdata('login_failed') ?>	
<?php endif; ?>
</p>

<p class="bg-danger">
<?php if($this->session->flashdata('admin_failed')):?>
<?php echo $this->session->flashdata('admin_failed') ?>	
<?php endif; ?>
</p>

<h1>hello, this is php project!</h1>
<h2>Firstly, you have to log in, then you can visit other pages except signup. You also can create your own account through signup.</h2>
<br>
<br>
 <ul>
  <li>username:admin, password: admin</li>
  <li>username:rita, password: rita</li>
  <li>username:xiaoyun, password: 1234</li>
 </ul>
 </ul>
 <br>
 <h2>Notice: With admin account, you can manager your users, but if you are not, you cannot open Users page!</h2>
 <h2>Enjoy!</h2>