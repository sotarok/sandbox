#!/bin/zsh

echo "dot"
/usr/bin/time /usr/bin/env php d.php >/dev/null
echo "comma"
/usr/bin/time /usr/bin/env php c.php >/dev/null

echo "dot (10 times join)"
/usr/bin/time /usr/bin/env php d10.php >/dev/null
echo "comma (10 times join)"
/usr/bin/time /usr/bin/env php c10.php >/dev/null

echo "dot (long string)"
/usr/bin/time /usr/bin/env php dlong.php >/dev/null
echo "comma (long string)"
/usr/bin/time /usr/bin/env php clong.php >/dev/null
