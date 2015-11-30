#####################################################################
## 
## unreliableUntrustedProduct.py
##
##   Invocations functions to use service implemented in
##   unreliable.php.
##
##

def unreliableUntrustedProduct(xs, n):
    url = 'http://cs-people.bu.edu/lapets/235/unreliable.php'
    return int(urlopen(url+"?n="+str(n)+"&data="+",".join([str(x) for x in xs])).read().decode())
    
#eof