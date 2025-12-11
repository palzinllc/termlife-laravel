// @ts-check
const { test, expect } = require('@playwright/test');

// Test all main pages load successfully
const pages = [
  { url: '/', name: 'Home', heading: 'Compare Term Life Insurance At True Cost' },
  { url: '/what-is-term-life', name: 'What is Term Life', heading: 'What is Term Life Insurance?' },
  { url: '/who-needs-this', name: 'Who Needs This', heading: 'Who Needs Term Life Insurance?' },
  { url: '/how-to-choose', name: 'How to Choose', heading: 'How to Choose Term Life Insurance' },
  { url: '/about', name: 'About', heading: 'About CostPlus Life Insurance' },
  { url: '/blog', name: 'Blog', heading: 'Insurance Insights & Tips' },
  { url: '/contact', name: 'Contact', heading: 'Get in Touch' },
  { url: '/code-of-conduct', name: 'Code of Conduct', heading: 'Code of Conduct' },
  { url: '/disclosures', name: 'Disclosures', heading: 'Disclosures' },
  { url: '/privacy-policy', name: 'Privacy Policy', heading: 'Privacy Policy' },
  { url: '/terms', name: 'Terms', heading: 'Terms of Service' },
];

// Test carrier pages
const carrierPages = [
  { url: '/carriers/canada-life', name: 'Canada Life' },
  { url: '/carriers/manulife', name: 'Manulife' },
  { url: '/carriers/sun-life', name: 'Sun Life' },
  { url: '/carriers/rbc-insurance', name: 'RBC Insurance' },
  { url: '/carriers/equitable-life', name: 'Equitable Life' },
  { url: '/carriers/canada-protection-plan', name: 'Canada Protection Plan' },
  { url: '/carriers/empire-life', name: 'Empire Life' },
  { url: '/carriers/industrial-alliance', name: 'Industrial Alliance' },
];

// Test use case pages
const useCasePages = [
  { url: '/use-cases/families', name: 'Families' },
  { url: '/use-cases/singles-young-pros', name: 'Singles & Young Pros' },
  { url: '/use-cases/homeowners', name: 'Homeowners' },
  { url: '/use-cases/business-owners', name: 'Business Owners' },
  { url: '/use-cases/dentists-professionals', name: 'Dentists & Professionals' },
  { url: '/use-cases/key-people-buy-sell', name: 'Key People & Buy-Sell' },
  { url: '/use-cases/debt-loans', name: 'Debt & Loans' },
  { url: '/use-cases/divorce-child-support', name: 'Divorce & Child Support' },
  { url: '/use-cases/newcomers-immigrants', name: 'Newcomers & Immigrants' },
  { url: '/use-cases/special-needs-dependants', name: 'Special Needs Dependants' },
];

test.describe('Main Pages', () => {
  for (const page of pages) {
    test(`${page.name} page loads and displays correctly`, async ({ page: p }) => {
      await p.goto(page.url);
      
      // Check that page loaded (no error)
      await expect(p).not.toHaveTitle(/Internal Server Error/);
      
      // Check that heading is present
      if (page.heading) {
        await expect(p.getByRole('heading', { name: new RegExp(page.heading, 'i') })).toBeVisible();
      }
      
      // Check that navigation is present
      await expect(p.getByRole('link', { name: 'Home', exact: true })).toBeVisible();
    });
  }
});

test.describe('Carrier Pages', () => {
  for (const page of carrierPages) {
    test(`${page.name} carrier page loads successfully`, async ({ page: p }) => {
      await p.goto(page.url);
      
      // Check that page loaded (no error)
      await expect(p).not.toHaveTitle(/Internal Server Error/);
      
      // Check that navigation is present
      await expect(p.getByRole('link', { name: 'Home', exact: true })).toBeVisible();
    });
  }
});

test.describe('Use Case Pages', () => {
  for (const page of useCasePages) {
    test(`${page.name} use case page loads successfully`, async ({ page: p }) => {
      await p.goto(page.url);
      
      // Check that page loaded (no error)
      await expect(p).not.toHaveTitle(/Internal Server Error/);
      
      // Check that navigation is present
      await expect(p.getByRole('link', { name: 'Home', exact: true })).toBeVisible();
    });
  }
});

test.describe('FAQ Accordion Functionality', () => {
  test('FAQ accordion opens and closes correctly', async ({ page }) => {
    await page.goto('/');
    
    // Scroll to FAQ section
    await page.getByRole('heading', { name: /Frequently Asked Questions/i }).scrollIntoViewIfNeeded();
    
    // Find the first FAQ button
    const firstFaqButton = page.getByRole('button', { name: /How much term life insurance do I need/i });
    
    // Check that FAQ content is initially hidden
    const faqContent = page.getByText(/A good rule of thumb is 10-12 times your annual income/i);
    await expect(faqContent).not.toBeVisible();
    
    // Click to open
    await firstFaqButton.click();
    
    // Check that content is now visible
    await expect(faqContent).toBeVisible();
    
    // Click to close
    await firstFaqButton.click();
    
    // Check that content is hidden again
    await expect(faqContent).not.toBeVisible();
  });
  
  test('FAQ accordion icon rotates on open/close', async ({ page }) => {
    await page.goto('/');
    
    // Scroll to FAQ section
    await page.getByRole('heading', { name: /Frequently Asked Questions/i }).scrollIntoViewIfNeeded();
    
    // Find the first FAQ button
    const firstFaqButton = page.getByRole('button', { name: /How much term life insurance do I need/i });
    
    // Get the chevron icon
    const chevronIcon = firstFaqButton.locator('svg').first();
    
    // Check initial state - should not have rotate-180 class
    const initialClass = await chevronIcon.getAttribute('class');
    expect(initialClass).not.toContain('rotate-180');
    
    // Click to open
    await firstFaqButton.click();
    await page.waitForTimeout(500); // Wait for transition
    
    // Check that icon has rotated
    const openClass = await chevronIcon.getAttribute('class');
    expect(openClass).toContain('rotate-180');
    
    // Click to close
    await firstFaqButton.click();
    await page.waitForTimeout(500); // Wait for transition
    
    // Check that icon has rotated back
    const closedClass = await chevronIcon.getAttribute('class');
    expect(closedClass).not.toContain('rotate-180');
  });
  
  test('Multiple FAQ items can be opened independently', async ({ page }) => {
    await page.goto('/');
    
    // Scroll to FAQ section
    await page.getByRole('heading', { name: /Frequently Asked Questions/i }).scrollIntoViewIfNeeded();
    
    // Open first FAQ
    const firstFaqButton = page.getByRole('button', { name: /How much term life insurance do I need/i });
    await firstFaqButton.click();
    
    // Open second FAQ
    const secondFaqButton = page.getByRole('button', { name: /What's the difference between 10, 20, and 30-year terms/i });
    await secondFaqButton.click();
    
    // Check that both are visible
    await expect(page.getByText(/A good rule of thumb is 10-12 times your annual income/i)).toBeVisible();
    await expect(page.getByText(/The term length determines how long your coverage lasts/i)).toBeVisible();
  });
});

test.describe('FAQ on About Page', () => {
  test('About page FAQ accordion works correctly', async ({ page }) => {
    await page.goto('/about');
    
    // Scroll to FAQ section on About page
    await page.getByRole('heading', { name: /Frequently Asked Questions/i }).scrollIntoViewIfNeeded();
    
    // Find the first FAQ button on About page
    const firstFaqButton = page.getByRole('button', { name: /What makes CostPlus Life different/i });
    
    // Check that FAQ content is initially hidden
    const faqContent = page.getByText(/We focus exclusively on term life insurance/i);
    await expect(faqContent).not.toBeVisible();
    
    // Click to open
    await firstFaqButton.click();
    
    // Check that content is now visible
    await expect(faqContent).toBeVisible();
  });
});
