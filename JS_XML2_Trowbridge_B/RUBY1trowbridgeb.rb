#Bradley Trowbridge
#COP 3834C-01 Web Application Development
#Ruby1

def fibanacci_sum(size)
	i = 0
	sum = 0
	prev = 0
	fibItr= 1

	for i < size

		sum += fibItr

		temp = fibItr

		fibItr += prev

		prev = temp

	end

	return sum
end

print fibanacci_sum(10)