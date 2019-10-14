# Some rules good to know

## Rewrite flags
These are most used:  
- `E` - Env
- `F` - Forbidden
- `L` - Last
- `R` - Redirect  
Other flags and description: [http://httpd.apache.org...](http://httpd.apache.org/docs/2.4/rewrite/flags.html)

## Troubleshooting
Some rules, like R=301, are stored in browser and when we remove it from .htaccess file, change is not visible. We are still redirected. Then is need to clear browser history or check it through incognito window.