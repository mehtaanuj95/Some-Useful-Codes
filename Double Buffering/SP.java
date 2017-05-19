import java.applet.Applet;
import java.awt.Color;
import java.awt.Graphics;
import java.awt.Image;

public class SP extends Applet implements Runnable
{
	
	int x = 400;
	int y = 25;
	int dx = 2;
	int dy = 0;
	int radius = 20;
	private Image i;
	private Graphics doubleG;
	
	@Override
	public void init() {
		setSize(800, 600);
	}
	
	@Override
	public void start() {
		//Whenever we gonna run this thread, it will refer to run method
		Thread thread = new Thread(this);
		thread.start();
		
	}
	
	@Override
	public void run() {
		
		//Thread Information	
		while(true)
		{
			if(x + dx > this.getWidth() - radius)
			{
				x = this.getWidth() - radius;
			}
			else
				x += dx;
			
			repaint();
			try 
			{
				//painting our canvas 60 times a sec
				Thread.sleep(17);
			} 
			catch (InterruptedException e) 
			{
				e.printStackTrace();
			}
		}
	}
	
	@Override
	public void stop() {
				
	}
	
	@Override
	public void destroy() {
		
		
	}
	
	@Override
	public void update(Graphics g) {
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
	
	@Override
	public void paint(Graphics g) {
		g.setColor(Color.GREEN);
		g.fillOval(x-radius, y-radius, radius*2, radius*2);
	}

}
