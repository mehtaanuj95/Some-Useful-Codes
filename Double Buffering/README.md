# Double buffering for of data

Initially define thee two inside your class.

	private Image i;
	private Graphics doubleG;

Then override a method named update(Graphics g) which takes in as argument a reference of Graphics class. 

	public void update(Graphics g) 
	{
		if(i == null)
		{
			i = createImage(this.getSize().width, this.getSize().height);
			doubleG = i.getGraphics();
		}
		
		doubleG.setColor(getBackground());
		doubleG.fillRect(0, 0, this.getSize().width, this.getSize().height);
		
		doubleG.setColor(getForeground());
		paint(doubleG);
		
		g.drawImage(i, 0, 0, this);
	}

A complete sample code is there in SP.java file.