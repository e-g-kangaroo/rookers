# Dummy string dictionary

## Japanese name sample

```php
	public function sample()
	{
		$first = \Rookers\Instance::forge('Japanese_FirstName');
		$last = \Rookers\Instance::forge('Japanese_LastName');
		for ($i = 0; $i < 10; $i++)
		{
			echo $last->rand().' '.$first->rand()."\n";
		}
	}
```
