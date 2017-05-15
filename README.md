# Protect-against-web-flaws
Some scripts to protect yourself
### HTACCES
  deny from all

  <Files ~ “^w+.(gif|jpg|png|txt)$”>
  order deny,allow
  allow from all
  </Files>
