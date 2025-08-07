# Function to generate Fibonacci series
def fibonacci(n):
    fib_series = []
    a, b = 0, 1
    for _ in range(n):
        fib_series.append(a)
        a, b = b, a + b
    return fib_series

# Get number of terms from user
num_terms = int(input("Enter the number of terms for the Fibonacci series: "))

# Generate and print the series
if num_terms <= 0:
    print("Please enter a positive integer.")
else:
    series = fibonacci(num_terms)
    print(f"Fibonacci series with {num_terms} terms:")
    print(series)
