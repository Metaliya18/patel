# Sample dictionary
my_dict = {'apple': 3, 'banana': 1, 'cherry': 2, 'date': 5}

# Sort ascending by value
ascending = dict(sorted(my_dict.items(), key=lambda item: item[1]))

# Sort descending by value
descending = dict(sorted(my_dict.items(), key=lambda item: item[1], reverse=True))

print("Original dictionary:", my_dict)
print("Sorted ascending by value:", ascending)
print("Sorted descending by value:", descending)
