print("\\\Some \t    one \"else\"\'2023")
print(""" Usage: thingy[Option]
      -h \t Display usage message
      -H Hostname:Hostname be conected to
      """)
from until.readfile import read_adj

if __name__ == ' __main__':
    n, adj = read_adj('input/baf.adj')
    print(f"Number of nodes: {n}")
    for i in range(n):
        print(f"Node {i}: {adj[i]}")      