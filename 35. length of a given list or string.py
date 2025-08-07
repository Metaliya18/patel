def compute_length(data):
    count = 0
    for _ in data:
        count += 1
    return count

# Using print to show the result:
print("Length of 'hello':", compute_length("hello"))
print("Length of [1, 2, 3, 4]:", compute_length([1, 2, 3, 4]))
