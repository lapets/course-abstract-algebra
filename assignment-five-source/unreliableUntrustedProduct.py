#####################################################################
## 
## unreliableUntrustedProduct.py
##
##   Invocations functions to use service implemented in
##   unreliable.php.
##
##

from urllib.request import urlopen
from urllib.parse import urlencode

def unreliableUntrustedProduct(xs, n):
    url = 'http://cs-people.bu.edu/lapets/235/unreliable.php'
    return int(urlopen(url+"?n="+str(n)+"&data="+",".join([str(x) for x in xs])).read().decode())

def unreliableUntrustedProductPOST(xs, n):
    url = 'http://cs-people.bu.edu/lapets/235/unreliable.php'
    data = {'n':str(n), 'data':",".join([str(x) for x in xs])}
    post = bytes(urllib.parse.urlencode(data).encode())
    handler = urllib.request.urlopen('http://cs-people.bu.edu/lapets/235/unreliable.php', post)
    return INT(handler.read().decode('utf-8'))

#eof