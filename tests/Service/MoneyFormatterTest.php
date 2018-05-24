<?phpnamespace App\Tests\Service;

use App\Service\MoneyFormatter;
use App\Service\NumberFormatter;
use PHPUnit\Framework\MockObject\MockObject;
use PHPUnit\Framework\TestCase;

class MoneyFormatterTest extends TestCase
{
    public function testEur()
    {
        $numberFormatterMock = $this->createMock(NumberFormatter::class);
        $numberFormatterMock->expects($this->once())
            ->method('formatNumber')
            ->willReturn('100K');

        $moneyFormatter = new MoneyFormatter($numberFormatterMock);

        $result = $moneyFormatter->formatEur(0);
        $this->assertEquals('100K €', $result);
    }

    public function testUsd()
    {
        $numberFormatterMock = $this->createMock(NumberFormatter::class);
        $numberFormatterMock->expects($this->once())
            ->method('formatNumber')
            ->willReturn('50K');

        $moneyFormatter = new MoneyFormatter($numberFormatterMock);

        $result = $moneyFormatter->formatUSD(0);
        $this->assertEquals('$50K', $result);
    }
}