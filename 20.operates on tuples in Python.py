# Sample tuple
numbers = (10, 20, 30, 20, 40, 10, 50)

# i) len() - Length of the tuple
print("len(numbers):", len(numbers))  # 7

# ii) count() - Count occurrences of an element
print("numbers.count(20):", numbers.count(20))  # 2

# iii) index() - Find index of first occurrence of an element
print("numbers.index(30):", numbers.index(30))  # 2

# iv) sorted() - Returns a sorted list from the tuple elements
print("sorted(numbers):", sorted(numbers))  # [10, 10, 20, 20, 30, 40, 50]

# v) min() - Minimum element
print("min(numbers):", min(numbers))  # 10

# vi) max() - Maximum element
print("max(numbers):", max(numbers))  # 50

# vii) cmp() - Not available in Python 3 (used in Python 2)
# Alternative: custom comparison function
# For demonstration, we compare two tuples manually:

tuple1 = (1, 2, 3)
tuple2 = (1, 2, 4)

def cmp(t1, t2):
    return (t1 > t2) - (t1 < t2)  # Returns 1 if t1>t2, -1 if t1<t2, else 0

print("cmp(tuple1, tuple2):", cmp(tuple1, tuple2))  # -1 (since 3<4)

# viii) reversed() - Returns an iterator to reverse the tuple
print("reversed(numbers):", tuple(reversed(numbers)))  # (50, 40, 20, 30, 20, 10, 10)
